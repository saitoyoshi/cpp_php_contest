#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  char s[5];
  int res = 0;
  scanf("%s",s);
  for (int i = 0; s[i] != '\0';i++) {
    if (s[i] == '+') {
      res++;
    } else {
      res--;
    }
  }
  printf("%d\n",res);
    return 0;
}
