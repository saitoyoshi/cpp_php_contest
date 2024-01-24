main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    let m = 0;
    for (let i = 0; i < s.length; i++) {
        for (let j = i + 1; j <= s.length; j++) {
            const substr = s.substr(i, j - i);
            if (isKaibun(substr)) {
                m = Math.max(m, substr.length);
            }
        }
    }
    console.log(m);
}

function isKaibun(s) {
    for (let i = 0; i < s.length; i++) {
        if (s[i] !== s[s.length - 1 - i]) {
            return false;
        }
    }
    return true;
}
