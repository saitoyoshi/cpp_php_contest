#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N,S;
  cin >> N >> S;
  int cnt = 0;
  for (int i = 1; i <= N; i++) {
    for (int j = 1; j <= N; j++) {
      if (i + j <= S) {
        cnt++;
      }
    }
  }
  cout << cnt << endl;
  return 0;
}
