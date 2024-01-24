main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    // console.log(f(N));
    if (N % f(N) === 0) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}

function f(n) {
    return String(n).split('').map(Number).reduce((a, c) => a + c, 0);
}
