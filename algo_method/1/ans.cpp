#include <iostream>
#include <vector>
#include <cmath>
#include <iomanip>
using namespace std;

int main() {
    // 入力
    int N;
    cin >> N;
    vector<double> X(N), Y(N);
    for (int i = 0; i < N; ++i) cin >> X[i] >> Y[i];

    // 二頂点間の距離を求める関数
    auto calc = [&](int i, int j) -> double {
        return sqrt((X[j]-X[i]) * (X[j] - X[i]) + (Y[j] - Y[i]) * (Y[j] - Y[i]));
    };

    // 答え
    double res = 0.0;

    // used[v] ← 頂点 v をすでに訪れたか
    vector<bool> used(N, false);
    used[0] = true;

    // 前回の頂点
    int prev = 0;

    // 毎回貪欲に頂点を選んでいく
    for (int i = 0; i < N - 1; ++i) {
        // 残っている頂点で最も近いところを探す
        int nex = -1;
        double min_dis = 1000000;
        for (int j = 0; j < N; ++j) {
            // すでに訪れた頂点はスキップ
            if (used[j]) continue;
            double dis = calc(prev, j);
            if (min_dis > dis) {
                min_dis = dis;
                nex = j;
            }
        }

        // 新たに頂点 nex を訪れる
        used[nex] = true;
        res += min_dis;

        // 前回頂点を更新
        prev = nex;
    }

    // 最後に頂点 0 へ戻る
    res += calc(prev, 0);

    // 小数点出力
    cout << fixed << setprecision(10) << res << endl;
}
