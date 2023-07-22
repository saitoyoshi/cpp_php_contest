#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N,M;
  int A[1009];
  int B[1009];
  cin >> N >> M;
  rep(i,N) cin >> A[i];
  rep(i,M) cin >> B[i];

  int res = 0; //result
  bool used[1009] = {false};

  rep(j,M) {
    rep(i,N) {
      if (used[i]) continue;
      if (A[i] <= B[j]) {
        res++;
        used[i] = true;
        break;
      }
    }
  }
  cout << res << endl;
  return 0;
}
