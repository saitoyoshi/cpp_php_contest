#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n,m;
  string s,t;
  cin>>n>>m>>s>>t;

  bool isPre = true;
  for (int i = 0; i < n; i++) {
    if (s[i] != t[i]) {
      isPre = false;
    }
  }
  bool isSuf = true;
  for (int i = 0; i < n;i++) {
    if (s[i] != t[m-n+i]) {
      isSuf = false;
    }
  }
  if (isPre) {
    cout << (isSuf ? 0:1) << endl;
  } else {
    cout<<(isSuf ?2:3)<<endl;
  }
  return 0;
}
