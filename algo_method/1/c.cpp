#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

double dist(int x1,int y1, int x2, int y2) {
  return sqrt((x1 - x2) * (x1 - x2) + (y1 - y2) * (y1 -y2));
}
int main()
{
  int N;
  cin >> N;
  int x[1009];
  int y[1009];
  rep(i,N) {
    cin >> x[i] >> y[i];
  }
  bool visited[1009] = {false};
  visited[0] = true;
  double res = 0;
  int currentPointIdx = 0;
  double distance;
  for (int i = 0; i < N - 1; i++) {
    double minDistance = numeric_limits<double>::max();
    int nextPointIdx = -1;
    for (int j = 0; j < N; j++) {
      if (visited[j]) {
        continue;
      }
      distance = dist(x[currentPointIdx],y[currentPointIdx], x[j], y[j]);
      if (minDistance > distance) {
        minDistance = distance;
        nextPointIdx = j;
      }
    }
    res += minDistance;
    visited[nextPointIdx] = true;
    currentPointIdx = nextPointIdx;
  }
  res += dist(x[currentPointIdx], y[currentPointIdx],x[0], y[0]);

  printf("%.12lf\n",res);
  return 0;
}
