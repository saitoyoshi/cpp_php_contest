#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int64_t gcd(int64_t A1, int64_t A2) {
  if (A2 == 0) return A1;
  return gcd(A2, A1 % A2);
}

int main()
{
  int N;
  cin >> N;
  vector<int64_t> A(N);
  rep(i,N) {
    cin >> A.at(i);
  }
  int64_t tmp = gcd(A.at(0), A.at(1));
  for (int i = 2; i < N; i++) {
    tmp = gcd(tmp, A.at(i));
  }
  cout << tmp << endl;
  return 0;
}
