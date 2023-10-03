#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#define swap(type,x,y) do {type t = x; x = y; y = t; } while (0)

void sort(int *a,int n) {
  for (int i = 0; i < n-1;i++) {
    for (int j=n-1;j>i;j--) {
      if (a[j-1] > a[j]) {
        swap(int, a[j-1],a[j]);
      }
    }
  }
}
int main(void)
{
  int a,b,c,d;
  scanf("%d %d %d %d",&a,&b,&c,&d);
  int arr[] = {a,b,c,d};
  sort(arr,sizeof(arr) / sizeof(arr[0]));
  int target[] = {1,4,7,9};
  if (memcmp(arr,target,sizeof(arr)) == 0) {
    puts("YES");
  } else {
    puts("NO");
  }
    return 0;
}
