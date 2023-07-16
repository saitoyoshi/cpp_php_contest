#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  int value;
  int64_t a = 0;
  int64_t b = 0;
  int64_t c = 0;
  int64_t d = 0;
  for (int i = 0; i < N; i++) {
    cin >> value;
    if (value == 100) a++;
    else if (value == 200) b++;
    else if (value == 300) c++;
    else d++;
  }
  cout << a*d + b*c << endl;
  return 0;
}
