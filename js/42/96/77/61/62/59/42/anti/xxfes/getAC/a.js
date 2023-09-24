const main = (input) => {
    let S = input.trim();
    let length = S.length;
    for (let i = 0; i < length - 1; i++) {
        if (S[i] === 'A' && S[i + 1] === 'C') {
            console.log('Yes');
            return;
        }
    }
    console.log('No');
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));