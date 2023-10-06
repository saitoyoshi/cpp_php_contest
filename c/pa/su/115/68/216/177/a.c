#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int d,t,s;
  scanf("%d %d %d",&d,&t,&s);
  int dis = t*s;
  puts(d<=dis ? "Yes":"No");
  return 0;
}
