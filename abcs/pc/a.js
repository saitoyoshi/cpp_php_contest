main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [H, W] = lines[0].split(' ').map(Number);
    // console.log(s);
    const r = [];
    for (let i = 1; i <= H; i++) {
        let s = lines[i];
        let newS = '';

        for (let j = 0; j < W - 1; j++) {
            if (s[j] === 'T' && s[j + 1] === 'T') {
                newS += 'PC';
                j++;
            } else {
                newS += s[j];
            }
        }
        newS += s[W - 1];
        r.push(newS);
    }
    // console.log(r);
    for (const v of r) {
        console.log(v);
    }
}
