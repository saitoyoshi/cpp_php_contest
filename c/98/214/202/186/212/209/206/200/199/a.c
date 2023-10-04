#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int a,b,c;
  scanf("%d %d %d",&a,&b,&c);
  if (a*a+b*b < c*c) {
    puts("Yes");
  } else {
    puts("No");
  }
    return 0;
}
