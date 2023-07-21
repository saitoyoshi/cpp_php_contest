#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n,m,l;
  cin >> n >> m >> l;
  int A[109][109] = {0};
  int B[109][109] = {0};
  long long C[109][109] = {0};

  for (int i = 1; i <= n; i++) {
    for (int j = 1; j <= m; j++) {
      cin >> A[i][j];
    }
  }
  for (int i = 1; i <= m; i++) {
    for (int j = 1; j <= l; j++) {
      cin >> B[i][j];
    }
  }
  for (int i = 1; i <= n; i++) {
    for (int j = 1; j <= l; j++) {
      for (int k = 1; k <= m; k++) {
        C[i][j] += A[i][k] * B[k][j];
      }
    }
  }
  for (int i = 1; i <= n; i++) {
    for (int j = 1; j <= l-1; j++) {
      cout << C[i][j] << " ";
    }
    cout << C[i][l];
    cout << endl;
  }
  return 0;
}
