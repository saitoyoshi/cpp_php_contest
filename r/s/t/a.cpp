#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  vector<int> A(N);
  rep(i,N) {
    cin >> A.at(i);
  }
  int64_t cnt = 0;
  for (int i = 0; i < N; i++) {
    for (int j = i + 1; j < N; j++) {
      for (int k = j + 1; k < N; k++) {
        for (int l = k + 1; l < N; l++) {
          for (int m = l + 1; m < N; m++) {
            if (A.at(i) + A.at(j) + A.at(k) + A.at(l) + A.at(m) == 1000) cnt++;
          }
        }
      }
    }
  }
  cout << cnt << endl;
  return 0;
}
