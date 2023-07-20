#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n;
  cin >> n;
  int a[n+9];
  rep(i,n) {
    cin >> a[i];
  }
  int min = 1000000;
  int max = -1000000;
  long sum = 0;
  rep(i,n) {
    sum += a[i];
    min = std::min(min,a[i]);
    max = std::max(max, a[i]);
  }
  cout << min << " " << max << " " << sum << endl;
  return 0;
}
