#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int n,k;
  int bucket[109];
  for (int i = 0; i < 109;i++) {
    bucket[i] = 0;
  }
  scanf("%d %d",&n,&k);
  for (int i = 0; i < k;i++) {
    int d;
    scanf("%d",&d);
    for (int j = 0; j < d; j++) {
      int t;
      scanf("%d",&t);
      bucket[t]++;
    }
  }
  int cnt = 0;
  for (int i = 1; i<=n;i++) {
    if (bucket[i] == 0) {
      cnt++;
    }
  }
  printf("%d\n",cnt);
    return 0;
}
