#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n,k;
  cin>>n>>k;
  vector<int> a(n+1,0);
  rep(i,k) {
    int d;
    cin>>d;
    int t;
    for (int j = 0; j < d; j++) {
      cin>>t;
      a[t]++;
    }
  }
  int cnt = 0;
  for (int i = 1; i <= n; i++) {
    if (a[i] == 0) {
      cnt++;
    }
  }
  cout <<cnt<<endl;
  // rep(i,n+1) {
  //   cout<<a[i]<<endl;
  // }
  return 0;
}
