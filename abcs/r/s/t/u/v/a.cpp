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
  int64_t result = 0,small = 0,big = 0;
  for (int i = 1; i <= 49999; i++) {
    for (int j = 0; j < N; j++) {
      if (A.at(j) == i) small++;
      else if (A.at(j) == (100000 - i)) big++;
    }
    result += small * big;
    small = big = 0;
  }
  int cnt = 0;
  for (int i = 0; i < N; i++) {
    if (A.at(i) == 50000) cnt++;
  }
  result += cnt * (cnt-1) / 2;
  cout << result << endl;
  return 0;
}
