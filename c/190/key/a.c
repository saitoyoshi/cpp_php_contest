#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <ctype.h>

int main(void)
{
  char s,t;
  scanf("%c\n%c", &s,&t);
  if (s == 'Y') {
    printf("%c\n", toupper(t));
  } else {
    printf("%c\n", (t));

  }
  return 0;
}
