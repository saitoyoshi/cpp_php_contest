main(require('fs').readFileSync('/dev/stdin','utf8'))


function main(input) {
  const [N,k] = input.trim().split(' ').map(Number);
  let t = N;
  if (k === 0) {
      console.log(N);
  } else {
      for (let i = 0; i < k; i++) {

        t = f(t);
      }
    }
      console.log(t);
  }
function f(x) {
  return g1(x)-g2(x);
}
function g1(x) {
  const str = x.toString();
  return Number(str.split('').map(Number).sort((a,b)=>b-a).join(''));
}
function g2(x) {
  const str = x.toString();
  return Number(str.split('').map(Number).sort((a,b)=>a-b).join(''));
}
