#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

long long factorial(long long N) {
  long long r = 1;
  for (int i = N; i >= 1; i--) {
    r *= i;
  }
  return r;
}
int main()
{
  long long N;
  cin >> N;
  cout << factorial(N) << endl;
  return 0;
}
