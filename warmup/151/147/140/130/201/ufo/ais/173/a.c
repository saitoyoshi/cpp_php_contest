#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{
  int n;
  scanf("%d",&n);
  int d = n % 1000;
  if (d == 0) {
    puts("0");
    return 0;
  }
  printf("%d\n",1000-d);
  return 0;
}
