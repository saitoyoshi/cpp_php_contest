const main = (input) => {
    const [a, b, h] = input.trim().split('\n').map(v => parseInt(v));
    console.log((a + b) * h / 2);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));