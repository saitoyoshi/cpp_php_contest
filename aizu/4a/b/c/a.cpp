#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a,b;
  string op;
  cin >> a >> op >> b;
  while (op != "?") {
    if (op == "+") cout << a + b << endl;
    else if (op == "-") cout << a - b << endl;
    else if (op == "*") cout << a * b << endl;
    else cout << a / b << endl;
    cin >> a >> op >> b;
  }
  return 0;
}
