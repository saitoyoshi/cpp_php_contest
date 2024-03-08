main(require('fs').readFileSync('/dev/stdin','utf8'))


function main(input) {
  let [x,y,z] = input.trim().split(' ').map(Number);

  if (y < 0) {
    x =-x;
    y=-y;
    z=-z;
  }
  if (x < y) {
      console.log(Math.abs(x)); return;
  }
  if (x > y) {
      if (z > y) {
        console.log(-1);return;
      }
      if (z < y) {
        console.log(Math.abs(z)+Math.abs(x-z));
      }
  }

}
