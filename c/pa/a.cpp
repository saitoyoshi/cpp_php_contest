#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int h,w,n;
  cin>>h>>w>>n;
  int m = max(h,w);
  cout<<(n+m-1)/m<<endl;
  return 0;
}
