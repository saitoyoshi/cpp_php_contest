const main = (input) => {
    let [a, b] = input.trim().split(' ').map(Number);
    const minCapability = 1 * a;
    const maxCapability = 6 * a;
    minCapability <= b && b <= maxCapability ?
        console.log('Yes') : console.log('No');
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));