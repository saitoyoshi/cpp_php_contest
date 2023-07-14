#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int64_t gcd(int64_t x, int64_t y) {
  if (y == 0) return x;
  return gcd(y, x % y);
}
int64_t lcm(int64_t x, int64_t y) {
  return x / gcd(x, y) * y;
}
int main()
{
  int N;
  cin >> N;
  vector<int64_t> A(N);

  rep(i,N) {
    cin >> A.at(i);
  }
  int64_t result = A.at(0);
  for (int i = 1; i < N; i++) {
    // int64_tを超えないようにする
    result = lcm(result, A.at(i));
  }
  cout << result << endl;
  return 0;
}
