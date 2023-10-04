#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int m,h;
  scanf("%d %d",&m,&h);
  h%m==0 ? puts("Yes") : puts("No");
    return 0;
}
