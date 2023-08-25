#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  // N * (3 * 3)要素の配列の宣言
  vector<vector<vector<char>>> data(N, vector<vector<char>>(3, vector<char>(3)));

  for (int i = 0; i < N; i++) {
    for (int j = 0; j < 3; j++) {
      for (int k = 0; k < 3; k++) {
        cin >> data.at(i).at(j).at(k);
      }
    }
  }
  int cnt = 0;
  for (int i = 0; i < N; i++) {
    for (int j = 0; j < 3; j++) {
      for (int k = 0; i < 3; k++) {

        if (data.at(i).at(j).at(k) == 'o') {
          cnt++;
        }
      }
    }
  }
  cout << cnt << endl;
  return 0;
}
