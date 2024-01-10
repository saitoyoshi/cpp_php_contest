main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    let a = [];
    for (let i = 0; i < N; i++) {
        a[i] = [];
        for (let j = 0; j <= i; j++) {
            if (j === i || j === 0) {
                a[i][j] = 1;
            } else {
                a[i][j] = a[i - 1][j - 1] + a[i - 1][j];
            }
        }
    }
    for (let i = 0; i < N; i++) {
        console.log(a[i].join(' '));
    }
}