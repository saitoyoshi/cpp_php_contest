main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [n, d] = input.trim().split(' ').map(Number);
    const range = 2 * d + 1;
    console.log(Math.ceil(n / range));

}