#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n,a,b;
  cin >> n >> a;
  rep(i,n) {
    string op;
    cin >> op >> b;
    if (op == "+") {
      a += b;
    } else if (op == "-") {
      a -= b;
    } else if (op == "*") {
      a *= b;
    } else if (op == "/" && b != 0) {
      a /= b;
    }
    if (b == 0) {
      cout << "error" << endl;
      break;
    } else {
      cout << i + 1 << ":" << a << endl;
    }
  }
  return 0;
}
