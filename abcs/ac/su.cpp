#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N,K;
  cin >> N >> K;
  vector<int> A(N);
  rep(i,N) {
    cin >> A.at(i);
  }
  bool flag = false;
  for (int i = 0; i < (1 << 20); i++) {
    bitset<20> s(i);
    int sum = 0;
    for (int j = 0; j < N; j++) {
      if (s.test(i)) {
        sum += A.at(i);
      }
    }
    if (sum == K) {
      flag = true;
    }
  }
  if (flag) {
    cout << "YES" << endl;
  } else {
    cout << "NO" << endl;
  }
  return 0;
}
