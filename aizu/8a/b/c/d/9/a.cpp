#include "bits/stdc++.h"
#define rep(i,n) for (int i = 0; i < (int)(n); i++)
using namespace std;

int main()
{
  string W;
  cin >> W;
  cin.ignore();

  transform(W.begin(), W.end(), W.begin(), ::tolower);

  string text,word;
  int cnt = 0;
  while (1) {
    getline(cin,text);
    if (text == "END_OF_TEXT") break;
    stringstream ss(text);
    while (ss >> word) {
      transform(word.begin(), word.end(), word.begin(), ::tolower);

      if (word == W) cnt++;
    }
  }
  cout << cnt << endl;
  return 0;
}
