#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int X,a0,a1,a2,a3;
  cin >> X >> a0 >> a1 >> a2 >> a3;
  int cnt = 0;
  while (1) {

    if (X >= 50 && a0 > 0) {
      X -= 50;
      cnt++;
      a0--;
    }
    else if (X >= 10 && a1 > 0) {
      X -= 10;
      cnt++;
      a1--;
    }
    else if (X >= 5 && a2 > 0) {
      X -= 5;
      cnt++;
      a2--;
    }
    else if (X >= 1 && a3 > 0) {
      X -= 1;
      cnt++;
      a3--;
    }
    if (X == 0) break;
  }
  cout << cnt << endl;
  return 0;
}
