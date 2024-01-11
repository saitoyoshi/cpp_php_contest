main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b, c, k] = input.trim().split(' ').map(Number);
    if (a >= k) {
        console.log(k);
    } else if (a + b >= k) {
        console.log(a);
    } else {
        const remain = k - a - b;
        console.log(a - remain);
    }
}