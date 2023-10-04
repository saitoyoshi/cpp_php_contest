#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  string s,t;
  cin>>s>>t;
  int cnt = 0;
  for (int i = 0; i < s.size();i++) {
    if (s.at(i) == t.at(i)) {
      cnt++;
    }
  }
  cout<<cnt<<endl;
  return 0;
}
