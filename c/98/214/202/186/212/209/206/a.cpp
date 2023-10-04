#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n;
  cin>>n;
  int price = (int)(1.08*n);
  if (price < 206) {
    cout<<("Yay!")<<endl;
  } else if (price > 206) {
    cout<<(":(")<<endl;
  } else {
    cout<<("so-so")<<endl;
  }
  return 0;
}
