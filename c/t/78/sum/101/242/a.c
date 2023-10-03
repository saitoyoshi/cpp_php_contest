#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int a,b,c,x;
  double res;
  scanf("%d %d %d %d",&a,&b,&c,&x);
  if (x <= a) {
    puts("1.000000000000");
    return 0;
  }
  if (x <= b) {
    double U = b-(a+1)+1;
    res = (double)c/U;
    printf("%0.12lf\n", res);
    return 0;
  }

  puts("0.000000000000");
  return 0;

}
