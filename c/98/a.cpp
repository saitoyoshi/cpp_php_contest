#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a,b;
  cin >> a >> b;
  int maxValue = max({a+b,a-b,a*b});
  cout << maxValue << endl;
  // cout << a << endl;
  // cout << b << endl;

  return 0;
}
