#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  char a[7];
  scanf("%s", a);
  int cnt = 0;
  for (int i = 0; i < 6; i++) {
    if (a[i] == '1') {
      cnt++;
    }
  }
  printf("%d\n", cnt);
    return 0;
}
