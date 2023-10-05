#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int t1,t2,b1,b2;
  scanf("%d",&t1);
  scanf("%d",&t2);
  scanf("%d",&b1);
  scanf("%d",&b2);
  int train;
  if (t1 <= t2) {
    train = t1;
  } else {
    train = t2;
  }
  int bus;
  if (b1 <= b2) {
    bus = b1;
  } else {
    bus = b2;
  }
  printf("%d\n",train+bus);
    return 0;
}
