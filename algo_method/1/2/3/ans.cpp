#include <iostream>
#include <vector>
using namespace std;

int main() {
    // 入力
    int X;
    cin >> X;
    vector<int> A(4);
    for (int i = 0; i < 4; ++i) cin >> A[i];

    // コインの金額
    const vector<int> coins = {50, 10, 5, 1};

    // 貪欲法
    int res = 0;
    for (int i = 0; i < 4; ++i) {
        // コインの枚数制限 (A[i] 枚) がないときの枚数
        int add = X / coins[i];

        // 枚数制限を考慮してコインの使用枚数を求める
        add = min(add, A[i]);
        res += add;

        // 残り金額を求める
        X -= coins[i] * add;
    }

    // 出力
    cout << res << endl;
}
