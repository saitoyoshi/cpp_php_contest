#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  char s[4];
  scanf("%s",s);
  char f=s[0];
  for (int i =1;s[i+1] != '\0';i++) {
    if (s[i] == f && s[i+1] == f) {
      puts("No");
    } else {
      puts("Yes");
    }
  }
  return 0;
}
