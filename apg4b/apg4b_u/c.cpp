#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a = 0;
  int &b = a;

  b = b + 1;

  cout << a << endl;
  return 0;
}
