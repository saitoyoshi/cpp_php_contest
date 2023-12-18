#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{
  int M,D;
  scanf("%d %d", &M, &D);
  int y,m,d;
  scanf("%d %d %d", &y,&m,&d);

  int d_d = d + 1;
  if (d_d > D) {
    m++;
    d_d = 1;
    if (m > M) {
      y++;
      m = 1;
    }
  }
  printf("%d %d %d\n", y, m , d_d);

  return 0;
}
