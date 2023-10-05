#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int x,a,b;
  scanf("%d",&x);
  scanf("%d",&a);
  scanf("%d",&b);
  int o = x-a;
  printf("%d\n",o%b);
    return 0;
}
