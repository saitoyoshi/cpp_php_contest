main(require('fs').readFileSync('/dev/stdin','utf8'))


function main(input) {
  const lines = input.trim().split('\n');
  const N = Number(lines[0]);
  const p = lines[1].split(' ').map(Number);
  const q = Number(lines[2]);
  for (let i = 3; i < q+3; i++) {
    const [a,b] = lines[i].split(' ').map(Number);
    const ai = p.indexOf(a);
    const bi = p.indexOf(b);
    if (ai < bi) {
      console.log(a);
    } else {
      console.log(b);
    }
  }
}
