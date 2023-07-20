#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a[4];
  rep(i,3) {
    cin >> a[i];
  }
  sort(a,a+3);
  for (int i = 0; i < 2; i++) {
    cout << a[i] << " ";
  }
  cout << a[2] << endl;
  return 0;
}
