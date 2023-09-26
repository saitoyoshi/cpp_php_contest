main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b] = input.trim().split(' ').map(Number);
    output(a, b);
}

function output(a, b) {
    a + b < 10 ? console.log(a + b) : console.log('error');
}