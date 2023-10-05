#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n,k;
  cin>>n>>k;
  vector<int> a(n);
  rep(i,n) {
    cin>>a[i];
  }
  sort(a.begin(),a.end());
  long sum = 0;
  for (int i = 0; i < n-k;i++) {
    sum += a[i];
  }
  cout<<sum<<endl;
  return 0;
}
