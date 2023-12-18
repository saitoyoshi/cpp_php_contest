main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    arr = input.trim().split(' ').map(Number);
    const a = arr[0];
    const b = arr[1];
    const r = a ** b + b ** a;
    console.log(r);
}