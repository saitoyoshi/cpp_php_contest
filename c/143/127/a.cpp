#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a, b;
  cin>>a>>b;
  if (a>=13) {
    cout << b<<endl;
  } else if (6<=a&&a<=12) {
    cout<<b/2<<endl;
  } else {
    cout<<0<<endl;
  }
  return 0;
}
