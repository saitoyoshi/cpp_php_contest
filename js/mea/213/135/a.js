main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b] = input.trim().split(' ').map(Number);
    const k = (a + b) / 2;
    if (Number.isInteger(k)) {
        console.log(k);
    } else {
        console.log('IMPOSSIBLE');
    }
}