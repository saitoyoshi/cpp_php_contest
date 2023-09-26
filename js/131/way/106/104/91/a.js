main(require('fs').readFileSync('/dev/stdin', 'utf8'));

function main(input) {
    const [a, b, c] = input.trim().split(' ').map(Number);
    a + b >= c ? console.log('Yes') : console.log('No');
}