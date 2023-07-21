#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

string rotate(string & s) {
  if (s.empty()) return s;
  return s.back() + s.substr(0,s.size()-1);
}
int main()
{
  string s,p;
  cin >> s >> p;
  int length = p.size();
  // string s = "abcd";
  for (int i = 0; i < s.size(); i++) {
    string s2 = s.substr(0,length);
    if (s2 == p) {
      cout << "Yes" << endl;
      return 0;
    }
    // cout << s << endl;
    s = rotate(s);
  }
  cout << "No" << endl;

  return 0;
}
