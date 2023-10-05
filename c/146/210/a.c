#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int n,a,x,y;
  scanf("%d %d %d %d",&n,&a,&x,&y);
  int res;
  if (n>=a) {
    res =(n-a)*y+a*x;
  } else {
    res =n*x;
  }
  printf("%d\n",res);
    return 0;
}
