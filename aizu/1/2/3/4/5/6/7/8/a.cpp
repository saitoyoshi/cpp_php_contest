#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int W,H,x,y,r;
  cin >> W >> H >> x >> y >> r;
  if ((x - r >= 0 && x + r <= W) &&
  (y - r >= 0 && y + r <= H)) {
    cout << "Yes" << endl;
  } else {
    cout << "No" << endl;

  }
  return 0;
}
