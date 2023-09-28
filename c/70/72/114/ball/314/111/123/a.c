#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int a[9];
  for (int i = 0; i < 6; i++) {
    scanf("%d", &a[i]);
  }
  for (int i = 0; i < 5; i++) {
    for (int j = i+1; j < 5; j++) {
      if (a[j]-a[i] > a[5]) {
        puts(":(");
        return 0;
      }
    }
  }
  puts("Yay!");
    return 0;
}
