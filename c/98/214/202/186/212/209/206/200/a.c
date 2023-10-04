#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main(void)
{
  int n;
  scanf("%d",&n);
  int cent = ceil((double)n/100);
  printf("%d\n",cent);
    return 0;
}
