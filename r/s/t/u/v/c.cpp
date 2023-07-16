#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  vector<int64_t> A(N);
  vector<int64_t> count(100001,0);

  rep(i,N) {
    cin >> A.at(i);
    count.at(A.at(i)) += 1;
  }
  int64_t result = 0;
  for (int i = 1; i <= 49999; i++) {
    result += count.at(i) * count.at(100000 - i);
  }
  result += count.at(50000) * (count.at(50000) - 1) / 2;

  cout << result << endl;
  return 0;
}
