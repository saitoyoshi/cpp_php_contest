#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{
  int a,b,c;
  scanf("%d %d %d",&a,&b,&c);
  if (c == 0) {
    while(1) {
      a--;
      if (a < 0) {
        puts("Aoki");
        return 0;
      }
      b--;
      if (b < 0) {
        puts("Takahashi");
        return 0;
      }
    }
  } else {
while(1) {
      b--;
      if (b < 0) {
        puts("Takahashi");
        return 0;
      }
      a--;
      if (a < 0) {
        puts("Aoki");
        return 0;
      }
    }
  }
  return 0;
}
