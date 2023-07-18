#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;


int64_t N;
vector<int64_t> A(200009);
vector<int64_t> C(200009);


void mergesort(int64_t l, int64_t r) {
  if (r-l == 1) return;
  int64_t m = (l + r) / 2;
  mergesort(l,m);
  mergesort(m,r);

  int64_t c1 = l, c2 = m, cnt = 0;
  while (c1 != m || c2 != r) {
    if (c1 == m) {
      C.at(cnt) = A.at(c2);
      c2++;
    } else if (c2 == r) {
      C.at(cnt) = A.at(c1);
      c1++;
    } else {
      if (A.at(c1) > A.at(c2)) {
        C.at(cnt) = A.at(c2);
        c2++;
      } else {
        C.at(cnt) = A.at(c1);
        c1++;
      }
    }
    cnt++;

  }
  for (int64_t i = 0; i < cnt; i++) {
    A.at(l+i) = C.at(i);
  }
}
int main()
{
  cin >> N;
  for (int64_t i = 0; i < N; i++) {
    cin >> A.at(i);
  }
  mergesort(0,N);
  for (int64_t i = 0; i < N - 1 ; i++) {
    cout << C.at(i) << " ";
  }
  cout << C.at(N-1) << endl;
  return 0;
}
