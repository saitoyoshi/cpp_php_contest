#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{
  int l,r,d;
  scanf("%d %d %d",&l,&r,&d);
  int M = r/d;
  int m = (l-1)/d;
  printf("%d\n",M-m);
  return 0;
}
