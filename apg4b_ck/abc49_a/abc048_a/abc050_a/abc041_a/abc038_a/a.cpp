#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  string s;
  cin >> s;
  char t = s.at(s.size() - 1);
  if (t == 'T') {
    cout << "YES" << endl;
  } else {
    cout << "NO" << endl;

  }
  return 0;
}
