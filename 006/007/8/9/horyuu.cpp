#include "bits/stdc++.h"
#define rep(i, n) for (int i = 0; i < (int)(n); i++)
using namespace std;
int main() {
    int N, S;
    cin >> N >> S;
    vector<int> A(N);
    rep(i,N) {
        cin >> A[i];
    }

    for (int bit = 0; bit < (1<<N); ++bit) {
        int sum = 0;
        rep(i,N) {
            if (bit & (1<<i)) {
                sum += A[i];
            }
        }
        if (sum == S) {
            cout << "Yes" << endl;
            return 0;
        }
    }

    cout << "No" << endl;
    return 0;
}
