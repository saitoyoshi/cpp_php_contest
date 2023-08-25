#include "bits/stdc++.h"
#include <algorithm>
#include <string>

using namespace std;
int main()
{
  string line;
  cin >> line;
  char c = '1';
  int result = count(line.begin(), line.end(), c);
  cout << result;
}
// #include <algorithm>
// #include <string>
// #include <iostream>

// int main() {
//     std::string str = "hello world!";
//     char c = 'l';

//     int count = std::count(str.begin(), str.end(), c);

//     std::cout << "The character '" << c << "' appears " << count << " times.\n";

//     return 0;
// }
