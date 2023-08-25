#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  vector<int> A(N);
  vector<int64_t> counts(100001, 0);

  rep(i,N) {
    cin >> A.at(i);
    counts[A.at(i)]++;
  }

  int64_t result = 0;
  for (int i = 1; i <= 50000; i++) {
    if (i != 100000 - i) {
      result += counts[i] * counts[100000 - i];
    }
    else {
      result += (counts[i] * (counts[i] - 1)) / 2;
    }
  }
  cout << result << endl;
  return 0;
}
