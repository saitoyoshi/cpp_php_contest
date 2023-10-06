#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a,b,c;
  cin>>a>>b>>c;
  int res = c-(a-b);
  cout<<((res<0)?0:res)<<endl;
  return 0;
}
