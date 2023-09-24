const main = (input) => {
    let [a, b] = input.trim().split(' ').map(e => parseInt(e));
    if (a <= 8 && b <= 8) {
        console.log('Yay!');
    } else {
        console.log(':(');
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));