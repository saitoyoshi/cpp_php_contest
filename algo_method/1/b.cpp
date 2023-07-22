#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  int res = 0;
  cin >> N;
  while (1) {
    res++;
    if (N % 3 == 0) {
      N /= 3;
    } else {
      N--;
    }
    if (N == 0) break;
  }
  cout << res << endl;
  return 0;
}
