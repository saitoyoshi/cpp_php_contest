#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int ball[4];
  scanf("%d", ball);
  scanf("%d", &ball[1]);
  if (ball[1] == 1) {
    printf("%d\n", 0);
  } else {
    printf("%d\n", ball[0]-ball[1]);
  }
    return 0;
}
