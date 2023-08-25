#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int gcd(int x, int y) {
  if (y == 0) return x;
  return gcd(y, x % y);
}
int main()
{
  int num1 = 24, num2 = 8;
  cout << gcd(num1,num2) << endl;
  return 0;
}
