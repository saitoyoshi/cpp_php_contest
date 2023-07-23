#include <iostream>
#include <vector>
#include <algorithm>
using namespace std;

int main() {
	// 入力
    int N;
    cin >> N;
    vector<int> S(N), T(N);
    for (int i = 0; i < N; ++i) cin >> S[i] >> T[i];

    // 終了時刻 T が小さい順に id を並び替える
    vector<int> ids(N);
    for (int i = 0; i < N; ++i) ids[i] = i;
    sort(ids.begin(), ids.end(), [&](int i, int j) {
        return T[i] < T[j];
    });

    // 終了時刻が早い順に見ていく
    int res = 0;
    int last_time = 0;  // 前回の予定の終了時刻
    for (auto i: ids) {
        // 予定 i の開始時刻が、前回終了時刻より早い場合はスキップ
        if (S[i] < last_time) continue;

        // 予定を採用する
        ++res;
        last_time = T[i];
    }
    cout << res << endl;
}
