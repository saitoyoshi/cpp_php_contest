#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  string s;
  cin>>s;
  for (int i = 0; i < s.size();i++) {
    if (s.at(i) == '7') {
      cout<<"Yes"<<endl;return 0;
    }
  }
  cout<<"No"<<endl;
  return 0;
}
