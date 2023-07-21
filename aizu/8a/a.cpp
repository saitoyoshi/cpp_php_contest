#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  string S;
  getline(cin, S);
  for (int i = 0; i < S.size(); i++) {
    if (isupper(S.at(i))) {
      cout << (char)tolower(S.at(i));
    } else {
      cout << (char)toupper(S.at(i));
    }
  }
  cout << endl;
  return 0;
}
