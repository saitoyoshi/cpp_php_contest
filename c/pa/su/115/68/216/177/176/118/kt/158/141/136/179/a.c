#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{
  char s[1009];
  scanf("%s",s);
  int l = strlen(s);
  char last = s[l-1];
  if (last =='s') {
    s[l] = 'e';
    s[l+1] = 's';
    s[l+2] = '\0';
  } else {
    s[l] = 's';
    s[l+1] = '\0';
  }
  printf("%s\n",s);
  return 0;
}
