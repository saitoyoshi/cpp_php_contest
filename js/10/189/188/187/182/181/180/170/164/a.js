const main = (input) => {
    const S = parseInt(input.trim().split(' ')[0]);
    const W = parseInt(input.trim().split(' ')[1]);
    W >= S ? console.log('unsafe') : console.log('safe');
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));