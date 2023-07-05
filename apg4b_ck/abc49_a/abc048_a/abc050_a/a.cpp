#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a,b,r;
  char cp;
  cin >> a >> cp >> b;
  if (cp == '-') {
    r = a - b;
  } else {
    r = a + b;
  }
  cout << r << endl;
  return 0;
}
