main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s0 = input.trim();
    const N = s0.length;
    const s1 = s0.substring(0, (N - 1) / 2);
    const s2 = s0.substring((N + 3) / 2 - 1, N);

    if (isKaibun(s0) && isKaibun(s1) && isKaibun(s2)) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}

function isKaibun(s) {
    const len = s.length;
    for (let i = 0; i < len; i++) {
        if (s[i] !== s[len - 1 - i]) {
            return false;
        }
    }
    return true;
}