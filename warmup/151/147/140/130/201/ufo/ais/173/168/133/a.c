#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{
  int n,a,b;
  scanf("%d %d %d",&n,&a,&b);
  int tr = n * a;
  if (tr > b) {
    printf("%d\n", b);
  } else {
    printf("%d\n",tr);
  }
  return 0;
}
