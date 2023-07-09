#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  vector<vector<int>> data(3, vector<int>(4));

  for (int i = 0; i < 3; i++) {
    for (int j = 0; j < 4; j++) {
      cin >> data.at(i).at(j);
    }
  }

  int cnt = 0;

  for (int i = 0; i < 3; i++) {
    for (int j = 0; j < 4; j++) {
      if (data.at(i).at(j) == 0) {
        cnt++;
      }
    }
  }
  cout << cnt << endl;
  return 0;
}
