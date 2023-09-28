main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [n, m] = input.trim().split(' ').map(Number);
    console.log((n - 1) * (m - 1));
}