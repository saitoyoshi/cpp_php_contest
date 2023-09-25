const main = (input) => {
    const N = Number(input.trim());
    if (N <= 999) {
        console.log('ABC');
    } else {
        console.log('ABD');
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));