#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n;
  cin >> n;
  int t;
  int sum = 0;
  rep(i,n) {
    cin >> t;
    sum += t;
  }
  cout << sum % 100 << endl;
  return 0;
}
