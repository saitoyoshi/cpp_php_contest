#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int x,y;
  cin >> x >> y;
  while (!(x == 0 && y == 0)) {
    if (x > y) {
      int t = x;
      x = y;
      y = t;
    }
    cout << x << " " << y << endl;
    cin >> x >> y;

  }
  return 0;
}
