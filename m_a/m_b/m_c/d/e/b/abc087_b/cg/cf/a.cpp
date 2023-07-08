#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n,s;
  int cnt = 0;
  cin >> n >> s;
  vector<int> a(n),p(n);
  rep(i,n) {
    cin >> a.at(i);
  }
  rep(i,n) {
    cin >> p.at(i);
  }
  rep(i,n) {
    rep(j,n) {
      if (s == a.at(i) + p.at(j)) {
        cnt++;
      }
    }
  }
  cout << cnt << endl;
  return 0;
}
