#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  char s[4];
  scanf("%s",s);
  char t[4];
  scanf("%s",t);
  int cnt = 0;
  for (int i = 0; i < 3; i++) {
    if (s[i] == t[i]) {
      cnt++;
    }
  }
  printf("%d\n",cnt);
    return 0;
}
