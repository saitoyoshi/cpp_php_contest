const main = (input) => {
    const N = Number(input.trim());
    if (N % 2 === 0) {
        console.log(1 / 2);
    } else {
        console.log(Math.ceil(N / 2) / N);
    }

}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));