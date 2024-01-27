main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = BigInt(input.trim());
    let a = 0n;
    let c = 0n;
    let result = N;
    for (let i = 0n; i <= 62n; i++) {
        a = N / (2n ** i);
        c = N - (a * (2n ** i));
        if (a+i+c < result) {
            result = a+i+c;
        }
    }
    console.log(Number(result));
}
