#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a,b;
  cin>>a>>b;
  int x=1,y=1;
  for (int _=1;_<=b;_++) x*=a;
  for (int _=1;_<=a;_++) y*=b;
  cout<<x+y<<endl;

  return 0;
}
