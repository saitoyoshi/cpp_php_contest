main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let P = Number(input.trim());
    let cnt = 0;
    let memo = [];
    memo[0] = 1;
    for (let i = 1; i <= 10; i++) {
        memo[i] = memo[i - 1] * i;
    }
    for (let i = 10; i >= 1; i--) {
        while (P >= memo[i]) {
            cnt++;
            P -= memo[i];
        }
    }
    console.log(cnt);
}

// function factorial(n) {
//     if (n === 1) return 1;
//     return n * factorial(n - 1);
// }