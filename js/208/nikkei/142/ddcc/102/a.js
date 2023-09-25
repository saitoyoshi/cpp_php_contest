const main = (input) => {
    const N = Number(input.trim());
    if (N % 2 === 0) {
        console.log(N);
    } else {
        console.log(N * 2);
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));