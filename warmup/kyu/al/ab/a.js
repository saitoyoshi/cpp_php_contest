main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let [a, b, c] = input.trim().split(' ').map(Number);
    [a, b] = [b, a];
    [a, c] = [c, a];
    console.log(a + ' ' + b + ' ' + c);
}