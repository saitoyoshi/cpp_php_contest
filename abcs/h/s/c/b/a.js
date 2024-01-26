main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const arr = lines[1].split(' ').map(Number);
    const S = arr.reduce((a, c) => a + c, 0);
    const tmp = [];
    let v = 0;
    for (let i = 0; i < N; i++) {
        v += arr[i];
        tmp.push(Math.abs(2 * v - S));
    }
    console.log(Math.min(...tmp));
}