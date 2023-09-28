main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b, c] = input.trim().split(' ').map(Number);
    b - a === c - b ? console.log('YES') : console.log('NO');
}