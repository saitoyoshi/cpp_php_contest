#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a,b;
  cin >> a >> b;
  string result;
  if (a > b) {
    result = "a > b";
  } else if (a < b) {
    result = "a < b";
  } else {
    result = "a == b";
  }
  cout << result << endl;
  return 0;
}
