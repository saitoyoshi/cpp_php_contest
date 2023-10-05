#include <stdio.h>
#include <stdlib.h>

int max(int a,int b,int c) {
  int result = a;
  if (result <= b) {
    result = b;
  }
  if (result <=c) {
    result = c;
  }
  return result;
}
int main(void)
{
  int a,b;
  scanf("%d %d",&a,&b);
  int res =max(a+b,a-b,a*b);
  printf("%d\n",res);
    return 0;
}
