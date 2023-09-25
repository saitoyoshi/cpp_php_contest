const main = (input) => {
    let s = input.trim();
    for (let i = 0; i < s.length - 1; i++) {
        if (s[i] === s[i + 1]) {
            console.log('Bad');
            return;
        }
    }
    console.log('Good');
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));