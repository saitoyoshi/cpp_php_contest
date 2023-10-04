#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int a,b;
  scanf("%d %d",&a,&b);
  int ko=a+b;
  int si=b;
  if (ko>=15 && si>=8) {
    puts("1");
  } else if (ko>=10 && si>=3) {
    puts("2");
  } else if (ko>=3) {
    puts("3");
  } else {
    puts("4");
  }
    return 0;
}
