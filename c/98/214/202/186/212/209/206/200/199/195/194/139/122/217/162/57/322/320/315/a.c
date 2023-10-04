#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  char s[109];
  scanf("%s",s);
  for (int i = 0; s[i] != '\0';i++) {
    if (s[i] != 'a' && s[i] != 'e'&& s[i] != 'i'&& s[i] != 'o'&& s[i] != 'u') {
      putchar(s[i]);
    }
  }
  putchar('\n');
    return 0;
}
