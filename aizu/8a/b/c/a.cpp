#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{

  string str;
  while (1) {
    string s;
    getline(cin, s);
    if (s == "") {
      break;
    }
    str += s;
  }
  map<char,int> alfabets_cnt;
  for (char ch = 'a'; ch <= 'z'; ch++) {
    alfabets_cnt[ch] = 0;
  }
  for (int i = 0; i < str.size(); i++) {
    char letter = tolower(str[i]);
    if ('a' <= letter && letter <= 'z') {
      alfabets_cnt[letter]++;
    }
  }
  for (char ch = 'a'; ch <= 'z'; ch++) {
    cout << ch << " : " << alfabets_cnt[ch] << endl;
  }
  return 0;
}
