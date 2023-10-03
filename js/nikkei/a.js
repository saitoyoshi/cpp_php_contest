main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [n, a, b] = input.trim().split(' ').map(Number);
    let max, min;
    if (a + b <= n) {
        max = Math.min(a, b);
        min = 0;
    } else {
        max = Math.min(a, b);
        min = a + b - n;
    }
    console.log(max + ' ' + min);
}