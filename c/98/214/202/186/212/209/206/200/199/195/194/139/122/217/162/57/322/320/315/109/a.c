#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int a,b;
  scanf("%d %d",&a,&b);
  if (a*b % 2 == 1) {
    puts("Yes");
  } else {
    puts("No");
  }
    return 0;
}
