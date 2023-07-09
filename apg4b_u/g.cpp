#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  vector<int> a = {1,2,3,4};
  for (int &x: a) {
    x *= 2;
  }
  rep(i,a.size()) {
    cout << a.at(i) << endl;
  }
  return 0;
}
