const main = (input) => {
    let s = input.trim();
    const p = s[0] === 'R';
    const q = s[1] === 'R';
    const r = s[2] === 'R';
    if (p && q && r) {
        console.log(3);
    } else if ((p && q) || (q && r)) {
        console.log(2);
    } else if (p || q || r) {
        console.log(1);
    } else {
        console.log(0);
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));