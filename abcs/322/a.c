#include <stdio.h>
#include <stdlib.h>
#include <string.h>
int main(void)
{
  int n,m;
  char s[109];
  char t[109];
  char begin[109];
  char after[109];

  scanf("%d %d",&n,&m);
  scanf("%s",s);
  scanf("%s",t);

  strncpy(begin,t,n);
  begin[n] = '\0';
  strncpy(after,t+strlen(t)-n,n);
  after[n] = '\0';
  int isPre = strcmp(s,begin) == 0;
  int isSuf = strcmp(s,after) == 0;

    if (isPre && isSuf) {
        puts("0");
    } else if (isPre && !isSuf) {
        puts("1");;

    } else if (isSuf && !isPre) {
        puts("2");

    } else if (!isPre && !isSuf) {
        puts("3");
    }
  // printf("%s",after);

  return 0;
}
