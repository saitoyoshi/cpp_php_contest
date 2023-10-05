#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int n;
  scanf("%d",&n);
  // C11において、可変長配列（Variable Length Array、VLA）が導入されました。C11に準拠している処理系では、可変長配列を使用することができます。
  // こういうふうに書いてもいい！
  int sum[n];
  for (int i = 1; i <=n;i++) {
    sum[i-1] = i;
  }
  for (int i = 0;i<n;i++) {
    printf("%d\n",sum[i]);
  }
  puts("ok");
    return 0;
}
