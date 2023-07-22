#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  string str;
  cin >> str;
  int q;
  cin >> q;
  string cmd;
  int a,b;
  for (int i = 0; i < q; i++) {
    cin >> cmd >> a >> b;
    if (cmd == "replace") {
      string newStr;
      cin >> newStr;
      str.replace(a,b - a + 1, newStr);
    } else if (cmd == "reverse") {
      reverse(str.begin() + a, str.begin() + b+1);
    } else if (cmd == "print") {
      string out = str.substr(a, b - a +1);
      cout << out << endl;
    }
  }
  return 0;
}
