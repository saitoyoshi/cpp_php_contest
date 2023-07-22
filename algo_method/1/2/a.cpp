#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  int cnt = 0;
  while (1) {
    if (N % 2 == 0) {
      N /= 2;
      cnt++;
    } else {
      N -= 1;
      cnt++;
    }
    if (N == 0) {
      break;
    }
  }
  cout << cnt << endl;
  return 0;
}
