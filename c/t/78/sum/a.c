#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int a,b;
  scanf("%d %d",&a,&b);
  if (a+b == 15) {
    putchar('+');
    putchar('\n');
  } else if (a*b == 15) {
    putchar('*');
    putchar('\n');
  } else {
    putchar('x');
    putchar('\n');
  }
    return 0;
}
