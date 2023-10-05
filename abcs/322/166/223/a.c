#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void rotate(char *s) {
  char first = s[0];
  int len = strlen(s);
  for (int i = 0; i < len -1; i++) {
    s[i] = s[i+1];
  }
  s[len-1] = first;
}

int cmp(const void *a, const void *b) {
  return strcmp(*(const char **)a,*(const char **)b);
}
void sort(char **a, int len) {
  qsort(a,len,sizeof(char *),cmp);
}

int main(void)
{
  char s[1009];
  scanf("%s",s);
  int len = strlen(s);
  char *a[len];//C９９以降では書いていい

  for (int i = 0; i<len;i++) {
    a[i]=strdup(s);
    rotate(s);
  }
  sort(a,len);
  printf("%s\n",a[0]);
  printf("%s\n",a[len-1]);

  for (int i=0;i<len;i++) {
    free(a[i]);
  }
  return 0;
}
