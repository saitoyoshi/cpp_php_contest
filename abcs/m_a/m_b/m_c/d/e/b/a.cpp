#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n;
  cin >> n;
  vector<int> a(n);
  rep(i,n) {
    cin >> a.at(i);
  }

  int cnt = 0;
  bool flag = false;
  while (1) {
    rep(i,n) {
      if (a.at(i) % 2 == 1) {
        flag = true;
      }
    }
    if (flag) {
      cout << cnt << endl;
      break;
    }
    cnt++;
    rep(i,n) {
      a.at(i) = a.at(i) / 2;
    }
  }
  return 0;
}
