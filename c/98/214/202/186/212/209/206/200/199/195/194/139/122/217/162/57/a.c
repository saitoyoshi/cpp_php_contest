#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int a,b;
  scanf("%d %d",&a,&b);
  int res = (a+b)%24;
  printf("%d\n",res);
    return 0;
}
