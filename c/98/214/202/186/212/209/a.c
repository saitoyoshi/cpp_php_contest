#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int a,b;
  scanf("%d %d",&a,&b);
  int res = b -a + 1;
  if (res < 0) {
    puts("0");
  } else {
    printf("%d\n",res);
  }
    return 0;
}
