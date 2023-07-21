#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n;
  cin >> n;
  int a[5][4][11];
  for (int i = 1; i <= 4; i++) {
    for (int j = 1; j <= 3; j++) {
      for (int k = 1; k <= 10; k++) {
        a[i][j][k] = 0;
      }
    }
  }
  int b,f,r,v;
  rep(i,n) {
    cin >> b >> f >> r >> v;
    a[b][f][r] += v;
  }
  for (int i = 1; i <= 4; i++) {
    for (int j = 1; j <= 3; j++) {
      for (int k = 1; k <= 10; k++) {
        cout << " " << a[i][j][k];
      }
      cout << endl;
    }
    if (i != 4) {
      for (int l = 1; l <= 20; l++) {
        cout << "#";
      }
    }
    if (i != 4) {
      cout << endl;
    }
  }
  return 0;
}
