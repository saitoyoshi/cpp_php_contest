main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    // L+i-1
    const [N, L] = input.trim().split(' ').map(Number);
    const arr = [];
    for (let i = 1; i <= N; i++) {
        arr.push(L + i - 1);
    }
    const S = arr.reduce((a, c) => a + c, 0);
    const tmp = [];
    for (const v of arr) {
        tmp.push(Math.abs(v));
    }
    const m = Math.min(...tmp);
    if (S < 0) {
        console.log(m + S);

    } else {
        console.log(S - m);
    }
}