main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    let sum = 0;
    for (let i = 1; i <= N; i++) {
        if (i % 3 === 0 || i % 5 === 0) {
            continue;
        }
        sum += i;
    }
    console.log(sum);
}