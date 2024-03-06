main(require('fs').readFileSync('/dev/stdin','utf8'))


function main(input) {
  const lines = input.trim().split('\n');
  let s = lines[0];
  let t = lines[1];
  if (s === t) {
    console.log('Yes');return;
  }
  let len = s.length;
  for (let i = 0; i < len; i++) {
    const a = Array.from(s);
    [a[i],a[i+1]] = [a[i+1],a[i]]
    if (a.join('') === t) {
      console.log('Yes');return;
    }
  }
  console.log('No');
}
