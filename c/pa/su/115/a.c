#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int d;
  scanf("%d",&d);
  if (d==25) {
    puts("Christmas");
  } else if (d==24) {
    puts("Christmas Eve");

  } else if (d==23) {
    puts("Christmas Eve Eve");
  } else if (d==22) {
    puts("Christmas Eve Eve Eve");
  }
  return 0;
}
