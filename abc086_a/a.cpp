#include "bits/stdc++.h"

using namespace std;

int main()
{
  int a,b;
  cin >> a >> b;
  int seki = a * b;
  if (seki % 2 == 0) {
    cout << "Even";
  } else {
    cout << "Odd";
  }
  return 0;
}
