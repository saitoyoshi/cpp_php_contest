#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a,b,c;
  cin>>a>>b>>c;
  // c = 0ならa>bでT,c=1ならa>=bでT
  if (c+a > b) {
    cout << "Takahashi" <<endl;
  } else {
    cout << "Aoki" <<endl;

  }
  return 0;
}
