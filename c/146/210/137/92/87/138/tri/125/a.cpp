#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a,b,t;
  cin>>a>>b>>t;
  int times = (t+0.5)/a;
  cout<<times*b<<endl;
  return 0;
}
