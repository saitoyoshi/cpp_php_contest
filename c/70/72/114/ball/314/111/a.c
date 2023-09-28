#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  char a[9];
  scanf("%s",a);
  for (int i = 0;i < 3; i++) {
    if (a[i] == '1') {
      putchar('9');
    } else if (a[i] == '9') {
      putchar('1');
    } else {
      putchar(a[i]);
    }
  }
  putchar('\n');
    return 0;
}
