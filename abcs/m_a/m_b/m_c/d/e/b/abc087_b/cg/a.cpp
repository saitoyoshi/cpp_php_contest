#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  vector<int> a(5);
  rep(i, 5) {
    cin >> a.at(i);
  }
  bool flag = false;
  rep(i,4) {
    if (a.at(i) == a.at(i + 1)) {
      flag = true;
      break;

    }
  }
  if (flag) {
    cout << "YES" << endl;
  } else {
    cout << "NO" << endl;
  }
  return 0;
}
