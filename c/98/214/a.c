#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int n;
  scanf("%d",&n);
  if (n <= 125) {
    printf("%d\n",4);
  } else if (n <= 211) {
    printf("%d\n",6);
  } else {
    puts("8");
  }
    return 0;
}
