#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{
  int a,b;
  scanf("%d %d",&a,&b);
  if (a <=9&&b<=9) {
    printf("%d\n",a*b);
  } else {
    puts("-1");
  }
  return 0;
}
