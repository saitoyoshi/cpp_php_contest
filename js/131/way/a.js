const main = (input) => {
    let [a, b, c] = input.trim().split(' ').map(Number);
    if (a < b) {
        if (a <= c && c <= b) {
            console.log('Yes');
        } else {
            console.log('No');
        }
    } else {
        if (a >= c && c >= b) {
            console.log('Yes');
        } else {
            console.log('No');
        }
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));