#include <stdio.h>
#include <stdlib.h>

int max(int a,int b, int c) {
  if (a >= b && a >= c) {
    return a;
  } else if (b >= a && b >= c) {
    return b;
  } else {
    return c;
  }

}

int main(void)
{
  int a,b;
  scanf("%d %d",&a,&b);
  int res = max(a+b,a-b,a*b);
  printf("%d\n",res);
    return 0;
}
