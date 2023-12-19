#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a1,a2,a3;
  cin >> a1 >> a2 >> a3;
  string s =  ((a1+a2+a3) >= 22) ? "bust" : "win";
  cout << s <<endl;
  return 0;
}
