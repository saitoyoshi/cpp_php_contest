#include "bits/stdc++.h"

using namespace std;

int main()
{
  int n,a;
  cin >> n >> a;
  int r = n % 500;
  if (a >= r) {
    cout << "Yes" << endl;
  } else {
    cout << "No" << endl;
  }
  return 0;
}
