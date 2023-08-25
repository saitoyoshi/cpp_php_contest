#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

bool has_divisor(int N, int i) {
  if (i == N) {
    return false;
  }
  if (N % i == 0) {
    return true;
  }
  return has_divisor(N, i + 1);
}

bool is_prime(int n) {
  if (n == 1) {
    return false;
  }
  if (n == 2 || n == 3) {
    return true;
  }
  return !has_divisor(n, 2);
}
int main()
{
  cout << is_prime(7) << endl;
  return 0;
}
