main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let [a, b, k] = input.trim().split(' ').map(Number);
    for (let i = 0; i < k; i++) {
        if (i % 2 === 0) {
            [n, a] = h(a);
            a -= n;
            b += n;
        } else {
            [n, b] = h(b);
            b -= n;
            a += n;
        }
    }
    console.log(a + ' ' + b);
}

function h(n) {
    if (n % 2 === 1) {
        n--;
        return [n / 2, n];
    } else {
        return [n / 2, n];
    }
}