#include <stdio.h>
#include <stdlib.h>
#include <string.h>
int main(void)
{
  char s[11];
  char t[11];
  scanf("%s %s",s,t);
  strcmp(s,t)<0?puts("Yes"):puts("No");
    return 0;
}
