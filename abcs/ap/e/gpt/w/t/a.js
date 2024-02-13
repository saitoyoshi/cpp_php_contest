main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    let s = lines[0].trim();
    let t = lines[1].trim();

    const pat = /[atcoder@]/;
    for (let i = 0; i < s.length; i++) {
        if (s[i] !== t[i]) {
            if (s[i] === '@') {
                if (pat.test(t[i])) {;
                } else {
                    console.log('You will lose');
                    return;
                }
            } else if (t[i] === '@') {
                if (pat.test(s[i])) {;
                } else {
                    console.log('You will lose');
                    return;
                }
            } else {
                console.log('You will lose');
                return;
            }
        }
    }
    console.log('You can win');
}