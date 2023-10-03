#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int x,a[10];
  for (int i=0;i<10;i++) {
    a[i] = 0;
  }
  for (int i = 0; i<4;i++) {
    scanf("%d",&x);
    a[x]++;
  }
  if (a[1] == 1 && a[9] == 1 && a[7] == 1 && a[4] == 1) {
    puts("YES");
  } else {
    puts("NO");
  }
    return 0;
}
