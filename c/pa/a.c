#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int h,w,n;
  scanf("%d",&h);
  scanf("%d",&w);
  scanf("%d",&n);

  int bigger = (h>w)?h:w;
  int times = n/bigger;
  int q = n % bigger;
  if (q == 0) {
    printf("%d\n",times);
  } else {
    printf("%d\n",times+1);

  }

  return 0;
}
