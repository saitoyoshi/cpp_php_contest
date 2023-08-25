#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a,b,c;
  cin >> a >> b >> c;
  int M = max(max(a,b),c);
  int m = min(min(a,b),c);
  cout << M - m << endl;
  return 0;
}
