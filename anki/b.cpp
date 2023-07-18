#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N,S;
  cin >> N >> S;
  vector<int> A(N);
  rep(i, N) {
    cin >> A.at(i);
  }
  for (int i = 0; i < (1 << N); i++) {
    int sum = 0;
    for (int j = 0; j < N; j++) {
      if (i & (1 << j)) {
        sum += A.at(j);
      }
    }
    if (sum == S) {
      cout << "Yes" << endl;
      return 0;
    }
  }
  cout << "No" << endl;
  return 0;
}
