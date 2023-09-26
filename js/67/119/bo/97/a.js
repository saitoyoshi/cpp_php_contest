main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b, c, d] = input.trim().split(' ').map(Number);
    if (D(a, c) <= d) {
        console.log('Yes');
    } else if (D(a, b) <= d && D(b, c) <= d) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}

function D(x1, x2) {
    return Math.abs(x1 - x2);
}