main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let P = Number(input.trim());
    let cnt = 0;

    for (let i = 1; i <= 10; i++) {
        let d = factorial(i + 1);
        let r = P % d;
        cnt += r / factorial(i);
        P -= r;
    }
    console.log(cnt);
}

function factorial(n) {
    if (n === 1) return 1;
    return n * factorial(n - 1);
}