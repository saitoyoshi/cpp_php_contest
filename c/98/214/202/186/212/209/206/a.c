#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int n;
  scanf("%d",&n);
  int price = (int)(1.08 * n);
  if (price < 206) {
    puts("Yay!");
  } else if (price > 206) {
    puts(":(");
  } else {
    puts("so-so");
  }
    return 0;
}
