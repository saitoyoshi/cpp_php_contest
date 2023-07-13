#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

void solve(long long N) {
  long long tmp = N;
  vector<long long> A(0);
  for (long long i = 2; i * i <= N; i++) {
    while (1) {
      if (tmp % i == 0) {
        A.push_back(i);
        tmp /= i;
      } else {
        break;
      }
    }
  }
  if (tmp != 1) {
    // tmpが素数の場合
    A.push_back(tmp);
  }
  for (long long i = 0; i < A.size(); i++) {
    if (i == A.size() - 1) {
      cout << A.at(i) << endl;
    } else {
      cout << A.at(i) << " ";
    }
  }
}
int main()
{
  long long N;
  cin >> N;
  solve(N);
  return 0;
}
