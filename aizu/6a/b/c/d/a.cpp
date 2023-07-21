#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n,m;
  cin >> n >> m;
  int a[n+1][m+1];
  for (int i = 1; i <= n; i++) {
    for (int j = 1; j <= m; j++) {
      cin >> a[i][j];
    }
  }
  int b[m+1];
  for (int i = 1; i <= m ; i++) {
    cin >> b[i];
  }
  int c[n+1];
  for (int i = 1; i <= n; i++) {
    c[i] = 0;
  }
  for (int i = 1; i <= n; i++) {
    for (int j = 1; j <= m; j++) {
      c[i] += a[i][j] * b[j];
    }
  }
  for (int i = 1; i <= n; i++) {
    cout << c[i] << endl;
  }
  return 0;
}
