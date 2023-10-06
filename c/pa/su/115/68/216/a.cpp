#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int x,y;
  cin>>x;
  getchar();
  cin>>y;
  if (0<=y&&y<=2) {
    cout <<x<<"-"<<endl;
  } else if (3<=y&&y<=6) {
    cout<<x<<endl;
  } else {
    cout<<x<<"+"<<endl;

  }
  return 0;
}
