#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int x,y;
  scanf("%d.%d",&x,&y);
  if (0<=y&&y<=2) {
    printf("%d",x);puts("-");
  } else if (3<=y&&y<=6) {
    printf("%d\n",x);
  } else {
    printf("%d",x);puts("+");

  }
  return 0;
}
