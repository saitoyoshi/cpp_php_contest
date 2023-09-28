#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int a[10];
  for (int i = 0; i < 2; i++) {
    scanf("%d", &a[i]);
  }
  int r = a[0] - a[1];
  if (r <= 0) {
    printf("0\n");
  } else {
    printf("%d\n",r);
  }
    return 0;
}
