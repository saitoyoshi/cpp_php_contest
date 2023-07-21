#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  string S;
  cin >> S;

  while ((S.at(0) - '0') != 0) {
    int sum = 0;
    for (int i = 0; i < S.size(); i++) {
      sum +=  (S.at(i) - '0');
    }
    cout << sum << endl;


    cin >> S;

  }
  return 0;
}
