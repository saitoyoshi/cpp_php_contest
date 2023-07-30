#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N,M;
  cin >> N >> M;
  int A[100009];
  int B[100009];
  rep(i, N) {
    cin >> A[i];
  }
  rep(i,M) {
    cin >> B[i];
  }
  for (int i = 0; i < M; i++) {
    int left = 0;
    int right = N - 1;
    while (left != right) {
      int mid = (left + right) / 2;
      if (A[mid] >= B[i]) {
        right = mid;
      } else {
        left = mid + 1;
      }
    }
    cout << left << endl;
  }
  return 0;
}
