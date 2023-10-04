#include <stdio.h>
#include <stdlib.h>
#include <math.h>
int main(void)
{
  int a,b;
  scanf("%d %d",&a,&b);
  printf("%d\n",(int)(pow(a,b)+pow(b,a)));
    return 0;
}
