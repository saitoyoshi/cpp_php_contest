const main = (input) => {
    let S = input.trim();
    S.includes('AC') ? console.log('Yes') :
        console.log('No');
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));