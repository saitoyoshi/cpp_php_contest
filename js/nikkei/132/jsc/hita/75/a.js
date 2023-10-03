main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b, c] = input.trim().split(' ').map(Number);
    if (a === b) {
        console.log(c);
    } else if (b === c) {
        console.log(a);
    } else if (c === a) {
        console.log(b);
    }

}