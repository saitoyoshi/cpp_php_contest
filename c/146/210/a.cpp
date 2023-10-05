#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n,a,x,y,res;
  cin>>n>>a>>x>>y;
  if (n>=a) {
    res =(n-a)*y+a*x;
  } else {
    res =n*x;
  }
  cout<<res<<endl;
  return 0;
}
