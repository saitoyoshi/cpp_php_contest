#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  vector<int> dp(N+1);

  for (int i = 0; i <= N; i++) {
    if (i == 0) dp.at(i) = 1;
    if (i == 1) dp.at(i) = 1;
    if (i == 2) dp.at(i) = 2;
    if (i >= 3) {
      dp.at(i) = dp.at(i-1) + dp.at(i-2);
    }
  }
  cout << dp.at(N) << endl;
  return 0;
}
