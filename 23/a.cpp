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
  double expect1 = 0.0, expect2 = 0.0;
  rep(i,N) {
    expect1 += B.at(i);
  }
  expect1 /= N;
  rep(i,N) {
    expect2 += R.at(i);
  }
  expect2 /= N;
  printf("%.12lf\n", expect1 + expect2);
  return 0;
}
