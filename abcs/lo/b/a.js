main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b] = input.trim().split(' ').map(Number);
    const c = (a - b) / 3 + b;
    console.log(c);
}