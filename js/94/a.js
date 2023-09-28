main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b, x] = input.trim().split(' ').map(Number);
    if (x >= a && a + b >= x) {
        console.log('YES');

    } else {
        console.log('NO');
    }
}