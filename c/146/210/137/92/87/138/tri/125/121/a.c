#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int H,W,h,w;
  scanf("%d %d",&H,&W);
  scanf("%d %d",&h,&w);
  printf("%d\n",(H-h)*(W-w));
    return 0;
}
