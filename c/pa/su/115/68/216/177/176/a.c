#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int n,x,t;
  scanf("%d %d %d",&n,&x,&t);
  int res = (n+x-1)/x*t;
  printf("%d\n",res);
  return 0;
}
