#include <iostream>
#include <vector>
#include <algorithm>

using namespace std;

// カスタム比較関数。終了時間を基準にソートする
bool comparePairs(const pair<int, int>& a, const pair<int, int>& b) {
    return a.second < b.second;
}

int main() {
    int N;
    cin >> N;

    vector<pair<int, int>> intervals(N);

    for (int i = 0; i < N; i++) {
        cin >> intervals[i].first >> intervals[i].second; // 開始時間と終了時間を読み込む
    }

    // 終了時間を基準にソートする
    sort(intervals.begin(), intervals.end(), comparePairs);

    int res = 0; // 選択できる区間の数
    int last_end_time = 0; // 最後に選択した区間の終了時間

    for (int i = 0; i < N; i++) {
        // 選択する区間の開始時間が最後に選択した区間の終了時間よりも後であれば選択
        if (intervals[i].first >= last_end_time) {
            res++;
            last_end_time = intervals[i].second;
        }
    }

    cout << res << endl;

    return 0;
}
