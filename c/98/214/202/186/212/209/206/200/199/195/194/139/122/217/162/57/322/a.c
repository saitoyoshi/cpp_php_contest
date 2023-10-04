#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int n;
  char s[109];
  scanf("%d",&n);
  scanf("%s",s);
  for (int i = 0; s[i+2] != '\0';i++) {
    if (s[i] == 'A' && s[i+1] == 'B' && s[i+2] == 'C') {
      printf("%d\n",i+1);return 0;
    }
  }
  puts("-1");
    return 0;
}
