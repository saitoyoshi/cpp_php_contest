const main = (input) => {
    let [a, b, c] = input.trim().split(' ');
    a = parseInt(a);
    b = parseInt(b);
    c = parseInt(c);
    a <= c && c <= b ? console.log('Yes') : console.log('No');
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));