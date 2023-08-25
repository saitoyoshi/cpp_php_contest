#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  vector<int> B(N);
  vector<int> R(N);
  rep(i,N) {
    cin >> B.at(i);
  }
  rep(i,N) {
    cin >> R.at(i);
  }
  double result = 0.0;
  rep(i,N) {
    result += B.at(i);
    result += R.at(i);
  }
  result /= N;
  printf("%.12lf\n", result);
  return 0;
}
