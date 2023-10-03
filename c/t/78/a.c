#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  char x,y;
  scanf("%s",&x);
  scanf("%s",&y);
  if ((int) x < (int) y)  {
    puts("<");
  } else if ((int) x > (int) y) {
    puts(">");
  }  else {
    puts("=");
  }
    return 0;
}
