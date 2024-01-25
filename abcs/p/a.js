main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b, c] = input.trim().split(' ').map(Number);
    console.log(Number(b) + Math.min(c, a + b + 1));
}
