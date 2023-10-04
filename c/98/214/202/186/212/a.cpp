#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int a,b;
  cin>>a>>b;
  if (0 < a && b == 0) {
    puts("Gold");
  } else if (a == 0 && 0 < b) {
    puts("Silver");
  } else if (0 < a && 0 < b) {
    puts("Alloy");
  }
  return 0;
}
