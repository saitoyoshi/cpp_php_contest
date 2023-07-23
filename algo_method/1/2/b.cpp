#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  int S[1009];
  int T[1009];
  rep(i,N) cin >> S[i] >> T[i];
  vector<int> ids(N);
  rep(i,N) ids[i] = i;
  sort(ids.begin(), ids.end(), [&](int i, int j) {
    return T[i] < T[j];
  });

  int res = 0;
  int last_time = 0;
  for (auto i: ids) {
    if (S[i] < last_time) continue;

    res++;
    last_time = T[i];
  }
  cout << res << endl;
  return 0;
}
