#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a,b,c;
  cin>>a>>b>>c;
  string s = (a==b&&b==c) ? "Yes": "No";
  cout <<s<<endl;
  return 0;
}
