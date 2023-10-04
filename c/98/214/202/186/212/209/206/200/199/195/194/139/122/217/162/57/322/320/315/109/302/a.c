#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <string.h>
int main(void)
{
  unsigned long long a,b;
  scanf("%llu %llu",&a,&b);
  printf("%llu\n", (a+b-1)/b);
}
