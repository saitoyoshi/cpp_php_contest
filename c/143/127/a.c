#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{
  int a,b;
  scanf("%d %d",&a,&b);
  if (a >= 13) {
    printf("%d\n",b);
  } else if (6 <= a && a <= 12) {
    printf("%d\n",b/2);
  } else {
    puts("0");
  }
  return 0;
}
