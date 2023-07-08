#include <bits/stdc++.h>
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main() {
  int N, M;
  cin >> N >> M;
  vector<int> A(M), B(M);
  for (int i = 0; i < M; i++) {
    cin >> A.at(i) >> B.at(i);
  }

  // ここにプログラムを追記
  // (ここで"試合結果の表"の2次元配列を宣言)
  vector<vector<int>> table(N,vector<int> (N,'-'));
  rep(i,M) {
    rep(j,M) {
      table.at(A.at(i)).at(B.at(j)) = 'o';
      table.at(B.at(i)).at(A.at(j)) = 'x';
    }
  }
  rep(i,N) {
    rep(j, N) {
      cout << table.at(i).at(j);
    }
  }
}
