const main = (input) => {
    const [a, b, c] = input.trim().split(' ').map(Number).sort((m, n) => m - n);
    console.log(a + b);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));