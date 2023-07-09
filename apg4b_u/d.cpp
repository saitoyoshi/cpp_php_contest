#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  string s = "apg4b";
  string &t = s;

  t.at(0) = 'A';
  t.at(1) = 'P';
  t.at(2) = 'G';

  cout << s << endl;
  cout << t << endl;
  return 0;
}
