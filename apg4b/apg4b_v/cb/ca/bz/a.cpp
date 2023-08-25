#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  map<int,int> table;
  int t;
  rep(i,N) {
    cin >> t;
    if (table.count(t)) {
      table.at(t)++;
    } else {
      table[t] = 1;
    }
    // keyがなければ、追加する。
    // 既出のキーであれば、インクリ
  }
  int max_count = 0;
  int max_value = -1;
  for (auto p : table) {
    auto key = p.first;
    auto value = p.second;
    if (value > max_count) {
      max_count = value;
      max_value = key;
    }
  }
  cout << max_value << " " << max_count << endl;
  return 0;
}
