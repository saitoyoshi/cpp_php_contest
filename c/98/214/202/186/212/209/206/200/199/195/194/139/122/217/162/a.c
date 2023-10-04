#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  char n[4];
  scanf("%s",n);
  for (int i = 0; n[i] != '\0';i++) {
    if (n[i] == '7') {
      puts("Yes");return 0;
    }
  }
  puts("No");
    return 0;
}
