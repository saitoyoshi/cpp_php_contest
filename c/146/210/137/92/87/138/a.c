#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int a;
  char s[19];
  scanf("%d",&a);
  scanf("%s",s);
  if (a>=3200) {
    printf("%s\n",s);
  } else {
    puts("red");
  }
    return 0;
}
