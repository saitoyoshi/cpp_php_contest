#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  int cnt = N / 5;
  int remain = N % 5;
  cout << cnt + remain << endl;
  return 0;
}
