#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{

  int a,b;
  scanf("%d %d",&a,&b);
  int c = 2*b;
  printf("%d\n",(a-c) >= 0 ? a-c : 0);
  return 0;
}
