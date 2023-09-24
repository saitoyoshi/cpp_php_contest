const main = (input) => {
    let [a, b] = input.trim().split(' ');
    if ((a === 'H' && b === 'H') || (a === 'D' && b === 'D')) {
        console.log('H');
    } else {
        console.log('D');
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));