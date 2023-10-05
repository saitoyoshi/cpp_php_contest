#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n,m;
  string s,t;
  cin>>n>>m>>s>>t;
  string begin = t.substr(0,n);
  string after = t.substr(t.length()-n);
  bool isPre = s == begin;
  bool isSuf = s == after;
      if (isPre && isSuf) {
        cout<<0<<endl;
    } else if (isPre && !isSuf) {
        cout<<1<<endl;;

    } else if (isSuf && !isPre) {
        cout<<(2)<<endl;

    } else if (!isPre && !isSuf) {
        cout<<(3)<<endl;

    }

  return 0;
}
