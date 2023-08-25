#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N, W;
  cin >> N >> W;

  vector<int64_t> v(N+1);
  vector<int> w(N+1);
  int64_t dp[N+1][100009];
  for (int i = 1; i <= N; i++) {
    cin >> w.at(i) >> v.at(i);
  }
  dp[0][0] = 0;
  for (int i = 1; i <= N; i++) {
    dp[0][i] = -(1LL << 60);
  }
  for (int i = 1; i <= N; i++) {
    for (int j = 0; j <= W; j++) {
      if (j < w.at(i)) dp[i][j] = dp[i-1][j];
      if (j >= w.at(i)) {
        dp[i][j] = max(dp[i-1][j], dp[i-1][j-w.at(i)]+ v.at(i));
      }
    }
  }
  int64_t result = 0;
  for (int i = 0; i <= W; i++) {
    result = max(result,dp[N][i]);
  }
  cout << result << endl;

  return 0;
}
