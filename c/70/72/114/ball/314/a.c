#include <stdio.h>
#include <stdlib.h>

#define PI "3.1415926535897932384626433832795028841971693993751058209749445923078164062862089986280348253421170679"
int main(void)
{
  int n;
  scanf("%d", &n);
  for (int i = 0; i <= n+1; i++)
  {
    printf("%c", PI[i]);
  }
  putchar('\n');
    return 0;
}
