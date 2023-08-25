#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N = 1000000;
  int cnt = 0;

  for (int i = 0; i < N; i++) {
    double px = 6.0 * rand() / (double)RAND_MAX;
    double py = 9.0 * rand() / (double)RAND_MAX;

    double d1 = sqrt((px - 3.0) * (px - 3.0) + (py - 7.0) * (py - 7.0));
    double d2 = sqrt((px - 3.0) * (px - 3.0) + (py - 3.0) * (py - 3.0));

    if (d1 <= 2.0 || d2 <= 3.0) cnt++;
  }
  cout << cnt << endl;
  return 0;
}
