main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    is321(N) ? console.log('Yes') : console.log('No');
}

function is321(n) {
    let s = String(n);
    if (s.length === 1) {
        return true;
    }
    for (let i = 0; i < s.length - 1; i++) {
        if (Number(s[i]) <= Number(s[i + 1])) {
            return false;
        }
    }
    return true;
}