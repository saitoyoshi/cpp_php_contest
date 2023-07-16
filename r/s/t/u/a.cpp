#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int64_t factorial(int n) {
  int64_t tmp = 1;
  for (int i = 1; i <= n; i++) {
    tmp *= i;
  }
  return tmp;
}
int64_t combination(int n, int r) {
  return factorial(n) / (factorial(r) * factorial(n-r));
}

int main()
{
  int n,r;
  cin >> n >> r;
  cout << combination(n,r) << endl;
  return 0;
}
