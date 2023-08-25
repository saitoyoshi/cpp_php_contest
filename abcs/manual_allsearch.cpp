#include "bits/stdc++.h"
// #include <iostream>
// #include <bitset>
// #include <vector>
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  int N = 6;
  vector<int> arr = {1,2,3,4,5,6};
  int S = 15;
  int cnt = 0;
  for (int i = 0; i < 2; i++) {
    for (int j = 0; j < 2; j++) {
      for (int k = 0; k < 2; k++) {
        for (int l = 0; l < 2; l++) {
          for (int m = 0; m < 2; m++) {
            for (int n = 0; n < 2; n++) {
              if ((i * arr.at(0) + j * arr.at(1) + k * arr.at(2) + l * arr.at(3) + m * arr.at(4) + n * arr.at(5)) == S) cnt++;
            }
          }
        }
      }
    }
  }
  cout << cnt << endl;
  return 0;
}
