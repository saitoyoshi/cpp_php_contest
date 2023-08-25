#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int gcd(int x, int y) {
  while (1) {
    if (x > y) {
      x = x % y;
    } else {
      y = y % x;
    }
    if (x == 0) return y;
    if (y == 0) return x;
  }
}
int main()
{
  int num1 = 1024, num2 = 256;
  cout << gcd(num1,num2) << endl;
  return 0;
}
