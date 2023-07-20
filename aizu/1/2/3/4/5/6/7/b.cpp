#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main(){

  // 3つの値を入れ替えてソートする
  int a,b,c;
  cin >> a >> b >> c;
  if (a > b) {
    int t = a;
    a = b;
    b = t;
  }
  if (b > c) {
    int t = c;
    c = b;
    b = t;
  }
  if (a > b) {
    int t = a;
    a = b;
    b = t;
  }
  cout << a << " " << b << " " << c << endl;
  return 0;
}
