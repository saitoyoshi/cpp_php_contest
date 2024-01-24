main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const arr = lines[0].split(' ').map(Number);
    const K = Number(lines[1]);
    const m = Math.max(...arr);
    const index = arr.indexOf(m);
    arr.splice(index, 1);
    // console.log(m);
    let n = m;
    for (let i = 0; i < K; i++) {
        n *= 2;
    }
    const r = arr.reduce((a, c) => a + c, 0) + n;
    console.log(r);
}
