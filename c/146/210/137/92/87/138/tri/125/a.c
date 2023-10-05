#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int a,b,t;
  scanf("%d %d %d",&a,&b,&t);
  double time = t+0.5;
  int times = (int)time/a;
  printf("%d\n",times*b);
    return 0;
}
