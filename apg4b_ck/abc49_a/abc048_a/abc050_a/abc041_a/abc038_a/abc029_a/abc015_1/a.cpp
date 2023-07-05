#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  string a,b;
  cin >> a >> b;
  int one = a.size();
  int another = b.size();
  if (one > another) {
    cout << a << endl;
  } else {
    cout << b << endl;

  }
  return 0;
}
