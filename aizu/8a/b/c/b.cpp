#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  char ch;
  int a[30] = {0}; //26
  while (cin >> ch) {
    int num = tolower(ch) - 'a';
    a[num]++;
  }
  for (int i = 0; i < 26; i++) {
    cout << (char)('a' + i) << " : " << a[i] << endl;
  }
  return 0;
}
