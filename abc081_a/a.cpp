#include "bits/stdc++.h"

using namespace std;

int main()
{
  string line;
  cin >> line;
  char c = '1';
  int result = count(line.begin(), line.end(), c);
  cout << result << endl;
  return 0;
}
