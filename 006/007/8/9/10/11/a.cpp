#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

bool is_prime(int n) {
  for (int i = 2; i * i <= n ; i++) {
    if (n % i == 0) {
      return false;
    }
  }
  return true;
}
int main()
{
  int N;
  cin >> N;
  vector<int> primes;
  for (int i = 2; i <= N ; i++) {
    if (is_prime(i)) {
      primes.push_back(i);
    }
  }
  for (int i = 0; i < primes.size(); i++) {
    if (i) cout << " ";
    cout << primes.at(i);
  }
  cout << endl;
  return 0;
}
