main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b, c, d] = input.trim().split(' ').map(Number);
    if (c <= b && a <= d) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}