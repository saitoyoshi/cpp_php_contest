#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N;
  cin >> N;
  vector<pair<int,int>> arr(N);
  int a,b;
  rep(i,N) {
    cin >> a >> b;
    arr.at(i) = make_pair(b,a);
  }
  sort(arr.begin(), arr.end());
  rep(i,N) {
    cout << arr.at(i).second << " " << arr.at(i).first << endl;
  }
  return 0;
}
