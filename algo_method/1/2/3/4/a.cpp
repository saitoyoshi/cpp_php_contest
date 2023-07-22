#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N,M;
  cin >> N >> M;
  int A[1009];
  int B[1009];
  rep(i,N) {
    cin >> A[i];
  }
  sort(A, A+N);
  rep(i,M) {
    cin >> B[i];
  }
  int cnt = 0;
  int j;
  int k = 0;
  for (int i = 0; i < N; i++) {
    for (j = k; j < M; j++) {
      if (A[i] <= B[j]) {
        cnt++;
        k = j+1;
        break;
      }
      if (j == M - 1) {
        cout << cnt << endl;
        return 0;
      }
    }
  }
  cout << cnt << endl;

  return 0;
}
