#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  vector<int> P(N);
  vector<int> Q(N);
  rep(i,N) {
    cin >> P.at(i) >> Q.at(i);
  }
  double result = 0.0;
  rep(i,N) {
    result += 1.0 / P.at(i) * Q.at(i);
  }
  printf("%.12lf\n", result);
  return 0;
}
