#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int n;
  cin >> n;
  int cards[4][14];
  char ch;
  int num;
  for (int i = 0; i < 4; i++) {
    for (int j = 1; j <= 13; j++) {
    cards[i][j] = 0;
    }
  }
  rep(i,n) {
    cin >> ch >> num;
    if (ch == 'S') {
      cards[0][num] = 1;
    } else if (ch == 'H') {
      cards[1][num] = 1;
    } else if (ch == 'C') {
      cards[2][num] = 1;
    } else {
      cards[3][num] = 1;
    }
  }
  for (int i = 0; i < 4; i++) {
    for (int j = 1; j <= 13; j++) {
      if (cards[i][j] == 0) {
        if (i == 0) {
          cout << 'S' << " " << j << endl;
        } else if (i == 1) {
          cout << 'H' << " " << j << endl;
        } else if (i == 2) {
          cout << 'C' << " " << j << endl;
        } else {
          cout << 'D' << " " << j << endl;
        }
      }
    }
  }

  return 0;
}
