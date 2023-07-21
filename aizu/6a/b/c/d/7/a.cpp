#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

void solve(int m, int f, int r) {
  if (m == -1 || f == -1) {
    cout << 'F' << endl;
    return;
  } else if (m + f >= 80) {
    cout << 'A' << endl;
    return;
  } else if (65 <= m+f && m+f < 80) {
    cout << 'B' << endl;
    return;
  } else if (50 <= m+f && m+f < 65) {
    cout << 'C' << endl;
    return;
  } else if (30 <= m+f && m+f < 50 && r >= 50) {
    cout << 'C' << endl;
    return;
  } else if (30 <= m+f && m+f < 50 && r < 50) {
    cout << 'D' << endl;
    return;
  } else if (m+f < 30) {
    cout << 'F' << endl;
    return;
  }

}

int main()
{
  int m,f,r;
  cin >> m >> f >> r;
  while (!(m == -1 && f == -1 && r == -1)) {
    solve(m,f,r);
    cin >> m >> f >> r;

  }
  return 0;
}
