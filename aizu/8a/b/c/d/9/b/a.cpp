#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  string str;
  cin >> str;
  while (str != "-") {
    int m;
    cin >> m;
    int h;
    for (int i = 0; i < m; i++) {
      cin >> h;
      str = str.substr(h) + str.substr(0,h);
    }
    cout << str << endl;
    cin >> str;

  }
  return 0;
}
