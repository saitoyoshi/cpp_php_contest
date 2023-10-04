#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  char ch;
  ch = getchar();
  if (ch == 'A') {
    puts("T");
  } else if (ch == 'C') {
    puts("G");
  } else if (ch == 'G') {
    puts("C");
  } else if (ch == 'T') {
    puts("A");
  }
    return 0;
}
