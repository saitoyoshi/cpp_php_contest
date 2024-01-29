main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = BigInt(input.trim());
    let r = N % 998244353n;
    if (r < 0) {
        r += 998244353n;
    }
    console.log(Number(r));
}
