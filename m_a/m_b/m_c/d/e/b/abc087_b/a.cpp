#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a,b,c,x;
  int cnt = 0;
  cin >> a >> b >> c >> x;
  rep(i, a + 1) {
    rep(j,b + 1) {
      rep(k,c + 1) {
        if (x == 500 * i + 100 * j + 50 * k) {
          cnt++;
        }
      }
    }
  }
  cout << cnt << endl;
  return 0;
}
