#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{
  int n,s,k;
  scanf("%d %d %d", &n, &s, &k);
  int sum = 0;
  for (int i = 0; i < n; i++) {
    int p,q;
    scanf("%d %d", &p, &q);
    sum += p * q;
  }
  if (sum < s) {
    sum += k;
  }
  printf("%d\n", sum);
  return 0;
}
