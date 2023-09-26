main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    const x = N * 800;
    const y = Math.floor(N / 15) * 200;
    console.log(x - y);
}