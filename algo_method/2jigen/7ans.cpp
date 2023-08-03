#include <bits/stdc++.h>
using namespace std;

// 各マス目について、生きている(黒) → 1, 死んでいる(白) → 0 として管理する
// 現在のマスの情報 now_ij とその周囲の生きているマスの総数 sum_ij の情報から、次のマスを求める関数
int next_state(int now_ij, int sum_ij) {
    // 基本的には現在のマス目のまま
    int ret = now_ij;

    // ただし、ルールに記載されているパターンについては、それに従う
    if(now_ij == 0 && sum_ij == 3) {ret = 1;}
    if(now_ij == 1) {
        if(sum_ij <= 1 || sum_ij >= 4) {ret = 0;}
        else {ret = 1;}
    }

    // 次の世代のマス目を返す
    return ret;
}

int main() {
    // 入力を受け取る
    int N, X; cin >> N >> X;
    vector<string> S(N);
    for(int i = 0; i < N; ++i) {
        cin >> S[i];
    }

    // 各マスの情報を 0/1 に変換する
    vector<vector<int>> now(N, vector<int>(N, 0)); // now[i][j]：マス (i, j) が白なら 0, 黒なら 1 をとる
    for(int i = 0; i < N; ++i) {
        for(int j = 0; j < N; ++j) {
            if(S[i][j] == '.') {now[i][j] = 0;}
            else if(S[i][j] == '#') {now[i][j] = 1;}
        }
    }

    // 現在の盤面情報を一つ先の世代に更新する、ということを X 回繰り返す
    for(int k = 0; k < X; ++k) {
        vector<vector<int>> nex(N, vector<int>(N, 0));  // 次の世代の盤面を一時的に保存する配列

        for(int i = 0; i < N; ++i) {
            for(int j = 0; j < N; ++j) {
                int sum_ij = 0; // マス (i, j) の周囲 8 マスにある生きているマスの総数
                // マス (i, j) の周囲 8 マスを全探索する
                for(int ni = i-1; ni <= i+1; ++ni) {
                    for(int nj = j-1; nj <= j+1; ++nj) {
                        // マス (ni, nj)　が (i, j) に一致するならば、スキップする
                        if(ni == i && nj == j) {continue;}
                        // マス (ni, nj) が盤面内のマスであるならば、sum_ij に加える
                        if(0 <= ni && ni < N && 0 <= nj && nj < N) {
                            sum_ij += now[ni][nj];
                        }
                    }
                }

                // 現在のマスの情報と周囲のマスの情報から、次の世代のマス目を得る
                nex[i][j] = next_state(now[i][j], sum_ij);
            }
        }
        // now を更新する
        now = nex;
    }

    // 答えを出力する
    for(int i = 0; i < N; ++i) {
        for(int j = 0; j < N; ++j) {
            if(now[i][j] == 0) {cout << '.';}
            else if(now[i][j] == 1) {cout << "#";}
        }
        cout << endl;
    }

	return 0;
}
