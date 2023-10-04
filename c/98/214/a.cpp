#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{ int n;
  cin >> n;
  if (n <= 125) {
    cout << 4 << endl;
  } else if (n <= 211) {
    cout << 6 << endl;
  } else {
    cout << 8 << endl;
  }
  return 0;
}
