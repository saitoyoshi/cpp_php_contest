#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

long long N,A[500009];
long long dp1[500009], dp2[500009];

int main()
{
  cin >> N;
  for (int i = 1; i<= N; i++) cin >> A[i];
  dp1[0] = 0;
  dp2[0] = 0;
  for (int i = 1; i<= N; i++) {
    dp1[i] = dp2[i-1] + A[i];
    dp2[i] = max(dp1[i-1],dp2[i-1]);
  }
  cout << max(dp1[N], dp2[N]) << endl;
  return 0;
}
