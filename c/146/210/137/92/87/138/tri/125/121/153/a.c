#include <stdio.h>
#include <stdlib.h>


void sort(int *a,int n) {
  for (int h = n/2;h>0;h/=2) {
    for (int i = h; i <n; i++) {
      int tmp = a[i];
      int j;
      for (j = i-h;j>=0&&a[j]>tmp;j-=h) {
        a[j+h]=a[j];
      }
      a[j+h] = tmp;
    }

  }
}
int main(void)
{
  int n,k;
  scanf("%d %d",&n,&k);
  int *a = (int *)malloc(n*sizeof(int));
  if (a==NULL) {
    puts("error");
    return 1;
  }
  for (int i = 0; i<n;i++) {
    scanf("%d",&a[i]);
  }
  sort(a,n);
  // for (int i = 0; i < n; i++) {
  //   printf("%d\n",a[i]);
  // }
  long sum = 0;
  for (int i = 0;i<n-k;i++) {
    sum+=a[i];
  }
  printf("%ld\n",sum);
  free(a);
    return 0;
}
