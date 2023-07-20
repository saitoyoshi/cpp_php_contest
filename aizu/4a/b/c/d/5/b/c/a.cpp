#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int H,W;
  cin >> H >> W;

  while (!(H == 0 && W == 0)) {
    for (int i = 1; i <= H; i++) {
      for (int j = 1; j <= W; j++) {
        if (i % 2 == 0 && j % 2 == 1) {
          cout << ".";
        } else if (i % 2 == 0 && j % 2 == 0) {
          cout << "#";
        } else if (i % 2 == 1 && j % 2 == 1) {
          cout << "#";
        } else if (i % 2 == 1 && j % 2 == 0) {
          cout << ".";

        }
      }
      cout << endl;
    }
    cout << endl;

    cin >> H >> W;

  }
  return 0;
}
