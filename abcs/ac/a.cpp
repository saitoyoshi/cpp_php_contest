#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N,K;
  cin >> N >> K;
  vector<int> A(N);
  rep(i,N) {
    cin >> A.at(i);
  }
  int64_t sum = 0;
  int64_t cnt = 0;
  for (int i = 0; i < (1 << N); i++) {
    for (int j = 0; j <= N; j++) {
      if (i & (1 << j)) {
        sum += A.at(N - j - 1);
      }
    }
    if (sum == K) {
      cout << "YES" << endl;
      return 0;
    }
  }
  cout << "NO" << endl;
  return 0;
}
