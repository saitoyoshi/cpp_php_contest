const main = (input) => {
    const S = input.trim();
    if (S === 'ABC') {
        console.log('ARC');
    } else {
        console.log('ABC');
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));