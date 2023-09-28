#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  char n[3];
  scanf("%s", n);
  // printf("%s", n);
  if (n[0] == n[2]) {
    printf("Yes\n");
  } else {
    printf("No\n");
  }
    return 0;
}
