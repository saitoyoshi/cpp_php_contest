#include <iostream>
#include <vector>
using namespace std;

int main() {
    // 入力
    // B は小さい順になっている
    int N, M;
    cin >> N >> M;
    vector<int> A(N), B(M);
    for (int i = 0; i < N; ++i) cin >> A[i];
    for (int j = 0; j < M; ++j) cin >> B[j];

    /////////////////////////
    // 各箱を小さい順に見ていく
    // 残っているボールの中で、その箱に入れられるものがあるならば
    // 後先考えずに、貪欲に入れていく
    ////////////////////////

    // 答え
    int res = 0;

    // 各ボールがすでにいずれかの箱に入ったか
    vector<bool> used(N, false);

    // 箱を小さい順に見ていく
    for (int j = 0; j < M; ++j) {
        // 箱 j に入るボールを探して入れる
        for (int i = 0; i < N; ++i) {
            // すでに前の箱に入ったボールはスキップ
            if (used[i]) continue;

            if (A[i] <= B[j]) {
                // 箱 j に入るボール i を見つけたら入れる
                ++res;
                used[i] = true;

                // 箱 j にはもうボールは入らないので break
                break;
            }
        }
    }
    cout << res << endl;
}
