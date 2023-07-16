#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  vector<int> A(N);
  vector<int> B(N);
  rep(i,N) {
    cin >> A.at(i);
  }
  rep(i,N) {
    cin >> B.at(i);
  }
  double result = 0.0;
  rep(i,N) {
    result += 1.0 / 3.0 * A.at(i);
    result += 2.0 / 3.0 * B.at(i);
  }
  printf("%.12lf\n", result);
  return 0;
}
