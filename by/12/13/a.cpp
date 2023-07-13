#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

void solve(long long N) {
  for (long long i = 1; i * i <= N; i++) {
    if (N % i != 0) continue;
    if (N % i == 0) cout << i << endl;
    if (i != N / i) cout << N / i << endl;
  }
}

int main()
{
  long long N;
  cin >> N;
  solve(N);
  return 0;
}
