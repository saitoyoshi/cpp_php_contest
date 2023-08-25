#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  vector<int> A(N);
  vector<int64_t> count(100000, 0);  // 値に対するカウントを格納する

  rep(i,N) {
    cin >> A.at(i);
    count[A.at(i)]++;  // 各値のカウントを行う
  }

  int64_t result = 0;
  for (int i = 1; i <= 50000; i++) {
    if (i == 100000 - i) {  // 同じ値で100000を作る場合
      result += count[i] * (count[i] - 1) / 2;  // 組み合わせの数
    } else {  // 異なる値で100000を作る場合
      result += count[i] * count[100000 - i];  // 組み合わせの数
    }
    count[i] = count[100000 - i] = 0;  // カウントをリセット（同じペアを数えないように）
  }
  cout << result << endl;
  return 0;
}
