main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b, c, d] = input.trim().split(' ').map(Number);
    // a+bx,cx
    // a+bx<= dcx
    // a <= (dc-b)x
    if (d * c - b <= 0) {
        console.log(-1);
    } else {
        console.log(Math.ceil(a / (d * c - b)));
    }
}