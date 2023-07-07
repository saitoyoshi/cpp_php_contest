#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  vector<int> arr(N);
  rep(i, N) {
    cin >> arr.at(i);
  }
  int sum = 0;
  rep(i, N) {
    sum += arr.at(i);
  }
  int ave = sum / N;
  rep(i, N) {
    cout << abs(ave - arr.at(i)) << endl;
  }
  return 0;
}
