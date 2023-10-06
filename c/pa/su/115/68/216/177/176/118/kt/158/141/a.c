#include <stdio.h>
#include <stdlib.h>
#include <string.h>
int main(void)
{
  char s[30];
  scanf("%s",s);
  if (strcmp(s,"Sunny")==0) {
    puts("Cloudy");
  } else if (strcmp(s,"Cloudy")==0) {
    puts("Rainy");
  } else {
    puts("Sunny");
  }
  return 0;
}
