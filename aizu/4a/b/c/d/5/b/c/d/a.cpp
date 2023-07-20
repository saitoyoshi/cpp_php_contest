#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

void my_call(int n) {
  for (int i = 1; i <= n; i++) {
    int x = i;
    if (x % 3 == 0) {
      cout << " " << i;
      continue;
    }
    while (x) {
      if (x % 10 == 3) {
        cout << " " << i;
        break;
      }
      x /= 10;
    }
  }
  cout << endl;
}
void call(int n){
  int i = 1;
 CHECK_NUM:
  int x = i;
  if ( x % 3 == 0 ){
    // xが3の倍数だったら
    cout << " " << i;
    goto END_CHECK_NUM;
  }
  // 3の倍数でなかったら
 INCLUDE3:
  if ( x % 10 == 3 ){
    // 10で割ったあまりが3であったら
    cout << " " << i;
    goto END_CHECK_NUM;
  }
  x /= 10;
  if ( x ) goto INCLUDE3;
  // xが0(9以下)でなかったら
 END_CHECK_NUM:
//  インクリメントした値が3以下だったら
  if ( ++i <= n ) goto CHECK_NUM;

  cout << endl;
}
int main()
{
  int n;
  cin >> n;
  my_call(n);
  return 0;
}
