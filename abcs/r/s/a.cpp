#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  int64_t a = 0, b = 0, c = 0;
  int val;
  rep(i,N) {
    cin >> val;
    if (val == 1) a++;
    else if (val == 2) b++;
    else c++;
  }
  cout << a  * (a -1)  / 2 + b *  (b-1)  / 2 + c * (c-1) / 2  << endl;
  return 0;
}
