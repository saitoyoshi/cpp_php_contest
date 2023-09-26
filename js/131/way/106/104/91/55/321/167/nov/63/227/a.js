main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let [n, k, a] = input.trim().split(' ').map(Number);
    console.log(calc(n, k, a));
}

function calc(n, k, a) {
    let result = (a + k - 1) % n;
    if (result === 0) {
        return n;
    } else {
        return result;
    }
}