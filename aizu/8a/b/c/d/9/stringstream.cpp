#include <iostream>
#include <string>
#include <sstream>
#include <algorithm>
using namespace std;

int main() {
    string W;
    cin >> W;

    // 入力バッファをクリア
    cin.ignore();

    // すべての文字を小文字に変換
    transform(W.begin(), W.end(), W.begin(), ::tolower);

    string text, word;
    int count = 0;
    while (true) {
        getline(cin, text);
        if (text == "END_OF_TEXT") break;

        // stringstreamを使用して各単語を取得
        stringstream ss(text);
        while (ss >> word) {
            // すべての文字を小文字に変換
            transform(word.begin(), word.end(), word.begin(), ::tolower);

            if (word == W) {
                count++;
            }
        }
    }

    cout << count << endl;

    return 0;
}
