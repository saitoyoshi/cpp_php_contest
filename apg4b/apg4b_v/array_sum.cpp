#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int array_sum_from_i(vector<int> &data , int i) {

  if (i == data.size()) {
    return 0;
  }
  return data.at(i) + array_sum_from_i(data,i+1);
}

int array_sum(vector<int> &data) {
  return array_sum_from_i(data, 0);
}
int main()
{
  vector<int> arr = {1, 2, 3,4 , 5};
  cout << array_sum(arr) << endl;
  return 0;
}
