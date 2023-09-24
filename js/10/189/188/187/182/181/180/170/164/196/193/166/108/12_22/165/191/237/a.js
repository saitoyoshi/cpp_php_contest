const main = (input) => {
    const N = input.trim();
    const b = -(2 ** 31) <= N && N < 2 ** 31 ?
        console.log('Yes') : console.log('No');
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));