#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int a,b;
  scanf("%d %d",&a,&b);
  if (0 < a && b == 0) {
    puts("Gold");
  } else if (a == 0 && 0 < b) {
    puts("Silver");
  } else if (0 < a && 0 < b) {
    puts("Alloy");
  }
    return 0;
}
