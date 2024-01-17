main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let P = Number(input.trim());
    let cnt = 0;
    for (let i = 10; i >= 1; i--) {
        const n = fac(i);
        while (n <= P) {
            P -= n;
            cnt++;
        }
    }
    console.log(cnt);
}

function fac(n) {
    if (n === 1) {
        return 1;
    }
    return n * fac(n - 1);
}