#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  string s;
  cin >> s;
  int length = s.size();
  int result = 1;
  for (int i = 1; i < length; i += 2) {
    if (s.at(i) == '+') {
      result += 1;
    } else {
      result -= 1;
    }
  }
  cout << result << endl;
  return 0;
}
