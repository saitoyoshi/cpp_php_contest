#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int x,a,b;
  scanf("%d", &x);
  scanf("%d", &a);
  scanf("%d", &b);
  int da = abs(x-a);
  int db = abs(x-b);
  if (da < db) {
    puts("A");
  } else {
    puts("B");
  }
    return 0;
}
