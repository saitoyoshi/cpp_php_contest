#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int H,W;
  cin >> H >> W;
  while (!(H == 0 && W == 0)) {
    rep(i,H) {
      rep(j,W) {
        cout << "#";
      }
      cout << endl;
    }
    cout << endl;
    cin >> H >> W;
  }
  return 0;
}
