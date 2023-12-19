#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{

  int x,a;
  scanf("%d %d",&x,&a);
  if (x < a) {
    puts("0");
  } else {
    puts("10");
  }
  return 0;
}
