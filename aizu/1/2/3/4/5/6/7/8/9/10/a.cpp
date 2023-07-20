#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int x;
  cin >> x;
  int i = 1;
  while (x != 0) {
    cout << "Case " << i << ": " << x << endl;

    cin >> x;
    i++;
  }
  return 0;
}
