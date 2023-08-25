#include <bits/stdc++.h>
using namespace std;

int main() {
  int x, a, b, r;
  cin >> x >> a >> b;

  // 1.の出力
  r = x + 1;
  cout << r << endl;
  r *= (a+b);
  cout << r << endl;
  r *= r;
  cout << r << endl;
  r -= 1;
  cout << r << endl;

}
