#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n;
  string s;
  cin>>n>>s;
  for (int i = 0; i < n-2;i++) {
    if("ABC" == s.substr(i,3)) {
      cout<<i+1<<endl;return 0;
    }
  }
  cout <<-1<<endl;
  return 0;
}
