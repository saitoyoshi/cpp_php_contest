const main = (input) => {
    const N = parseInt(input.trim());
    let sum = 0;
    for (let i = 1; i <= N; i++) {
        sum += i;
    }
    console.log(sum);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));