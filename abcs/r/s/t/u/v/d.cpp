#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int64_t N;
  cin >> N;
  vector<int64_t> A(N);
  rep(i,N) {
    cin >> A.at(i);
  }
  vector<int64_t> count(100000, 0);
  rep(i,N) {
    count.at(A.at(i)) += 1;
  }
  int64_t Answer = 0;
  for (int i = 1; i <= 49999; i++) {
    Answer += count.at(i) * count.at(100000 - i);
  }
  Answer += count.at(50000) * ( count.at(50000) - 1) / 2;

  cout << Answer << endl;
  return 0;
}
