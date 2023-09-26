main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const H = Number(lines[1]);
    const W = Number(lines[2]);
    const r = (N - H + 1) * (N - W + 1);
    console.log(r);
}