const main = (input) => {
    let [a, b] = input.trim().split(' ');
    a = parseInt(a);
    b = parseInt(b);
    a <= b ? console.log(a) : console.log(a - 1);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));