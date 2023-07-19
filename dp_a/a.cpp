#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  vector<int> h(N+1);
  vector<int> dp(N+1);
  for (int i = 1; i <= N; i++) {
    cin >> h.at(i);
  }
  for (int i = 1; i <= N; i++) {
    if (i == 1) dp.at(i) == 0;
    if (i == 2) dp.at(i) = abs(h.at(i-1) - h.at(i));
    if (i >= 3) {
      int v1 = dp.at(i-2) + abs(h.at(i) - h.at(i-2));
      int v2 = dp.at(i-1) + abs(h.at(i) - h.at(i-1));
      dp.at(i) = min(v1,v2);
    }
  }
  cout << dp.at(N) << endl;
  return 0;
}
