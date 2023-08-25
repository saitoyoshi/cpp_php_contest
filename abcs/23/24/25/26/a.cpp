#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  double result = 0.0;
  for (int i = 1; i <= N; i++) {
    result += 1.0 / i;
  }
  printf("%.12lf\n", result * N);
  return 0;
}
