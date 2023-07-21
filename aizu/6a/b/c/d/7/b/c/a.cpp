#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a[109][109] = {0};
  int r,c;
  cin >> r >> c;
  for (int i = 1; i <= r; i++) {
    for (int j = 1; j <= c; j++) {
      cin >> a[i][j];
    }
  }
  for (int i = 1; i <= r + 1; i++) {
    for (int j = 1; j <= c; j++) {
      a[i][c+1] += a[i][j];
    }
  }
  for (int i = 1; i <= c+1; i++) {
    for (int j = 1; j <= r; j++) {
      a[r+1][i] += a[j][i];
    }
  }
  for (int i = 1; i <= r +1 ; i++) {
    for (int j = 1; j <= c + 1; j++) {
      if (j <= c) {
        cout << a[i][j] << " ";
      } else {
        cout << a[i][j] << endl;
      }
    }
  }

  return 0;
}
