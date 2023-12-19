main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b, c] = input.trim().split(' ').map(Number);
    const t = Math.floor(b / a);
    if (t >= c) {
        console.log(c);
    } else {
        console.log(t);
    }
}
