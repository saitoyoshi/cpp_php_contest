#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  string s;
  cin>>s;
  char last = s.at(s.length()-1);
  if (last =='s') {
    cout<<s<<"es"<<endl;
  } else {
    cout<<s<<"s"<<endl;
  }
  return 0;
}
