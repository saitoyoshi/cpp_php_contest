#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n;
  cin >> n;
  string s1,s2;
  int t = 0,h = 0;
  for (int i = 0; i < n; i++) {
    cin >> s1 >> s2;
    if (s1 > s2) {
      t += 3;
    } else if (s1 < s2) {
      h += 3;
    } else {
      t++;h++;
    }
  }
  cout << t << " " << h << endl;
  return 0;
}
