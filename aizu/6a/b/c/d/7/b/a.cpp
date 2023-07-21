#include "bits/stdc++.h"
#define rep(i, n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main() {
    int n, x;
    int cnt = 0;
    cin >> n >> x;
    while (!(n == 0 && x == 0)) {
        for (int i = 1; i <= n; i++) {
            for (int j = i + 1; j <= n; j++) {
                for (int k = j + 1; k <= n; k++) {
                    if ((i + j + k) == x) cnt++;
                }
            }
        }
        cout << cnt << endl;
        cnt = 0;
    cin >> n >> x;

    }

    return 0;
}
