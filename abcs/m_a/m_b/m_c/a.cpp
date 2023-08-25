#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n;
  cin >> n;
  int sum = 0;
  int t;
  rep(i,n) {
    cin >> t;
    sum += t;
  }
  cout << sum << endl;
  return 0;
}
