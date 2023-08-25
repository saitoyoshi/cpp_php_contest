#include "bits/stdc++.h"
// #include <iostream>
// #include <bitset>
// #include <vector>
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N = 6;
  vector<int> arr = {1,2,3,4,5,6};
  int S = 15;
  int cnt = 0;
  for (int i = 0; i < (1 << arr.size()); i++) {
    int sum = 0;
    for (int j = 0; j < N; j++) {
      if (i & (1 << j)) {
        sum += arr.at(j);
      }
    }
    if (sum == S) {
      cnt++;
    }
  }
  cout << cnt << endl;
  return 0;
}
