#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

void min_and_max(int a,int b,int c, int &minimum, int &maximum) {
  minimum = min(a,min(b,c));
  maximum = max(a, max(b,c));
}

int main()
{
  int minimum, maximum;
  min_and_max(3,1,5, minimum, maximum);
  cout << "min: " << minimum << endl;
  cout << "max: " << maximum << endl;
  return 0;
}
