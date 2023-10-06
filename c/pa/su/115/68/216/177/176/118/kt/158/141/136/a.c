#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{
  int a,b,c;
  scanf("%d %d %d",&a,&b,&c);
  int res = c-(a-b);
  if (res <0) {
    puts("0");
  } else {
    printf("%d\n",res);
  }
  return 0;
}
