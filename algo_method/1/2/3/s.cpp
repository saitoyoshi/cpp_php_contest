#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int X;
  cin >> X;
  int A[4];
  rep(i,4) cin >> A[i];
  int coins[] = {50,10,5,1};

  int cnt = 0;
  rep(i,4) {
    int add = X / coins[i];
    add = min(add,A[i]);
    cnt += add;
    X -= coins[i] * add;
  }
  cout << cnt << endl;
  return 0;
}
