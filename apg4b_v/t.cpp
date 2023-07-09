#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

vector<int> reverse_array_from_i(vector<int> &data, int i) {
  if (i == data.size()) {
    vector<int> empty_array(0);
    return empty_array;
  }
  vector<int> tmp = reverse_array_from_i(data, i+1);
  tmp.push_back(data.at(i));
  return tmp;
}

vector<int> reverse_array(vector<int> &data) {
  return reverse_array_from_i(data, 0);
}

int main()
{
  vector<int> arr = {1 , 2 ,3};
  arr = reverse_array(arr);
  rep(i, arr.size()) {
    cout << arr.at(i) << endl;
  }
  return 0;
}
