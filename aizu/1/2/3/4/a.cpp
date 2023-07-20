#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int S;
  cin >> S;
  int h = S / 60 / 60;
  int r = S - h * 60 * 60;
  int m = r / 60;
  r = r - m * 60;
  cout << h << ":" << m << ":" << r << endl;
  return 0;
}
