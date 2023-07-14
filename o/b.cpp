#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int64_t gcd(int64_t A, int64_t B) {
  if (A == 0) return B;
  if (B == 0) return A;
  if (A > B) return gcd(A % B, B);
  else return gcd(A, B % A);
}

int main()
{
  int64_t A,B;
  cin >> A >> B;
  cout << gcd(A,B) << endl;
  return 0;
}
