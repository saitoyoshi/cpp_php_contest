const main = (input) => {
    let [a, b] = input.trim().split(' ').map(Number);
    console.log((a - 1) * (b - 1));
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));