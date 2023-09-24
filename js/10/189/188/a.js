const main = (input) => {
    const x = parseInt(input.trim().split(' ')[0]);
    const y = parseInt(input.trim().split(' ')[1]);
    if (x > y) {
        if (y + 3 > x) {
            console.log('Yes');
        } else {
            console.log('No');
        }
    } else {
        if (x + 3 > y) {
            console.log('Yes');
        } else {
            console.log('No');
        }
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));