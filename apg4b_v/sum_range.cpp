#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;


int sum_range(int a, int b) {

  if (a == b) {
    return b;
  }
  return a + sum_range(a+1,b);
}
int main()
{
  int s = sum_range(4, 10);
  cout << s << endl;
  return 0;
}
