#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n;
  cin >> n;
  int a[109];
  rep(i,n) {
    cin >> a[i];
  }
  for (int i = n - 1; i >= 1; i--) {
    cout << a[i] << " ";
  }
  cout << a[0] << endl;
  return 0;
}
