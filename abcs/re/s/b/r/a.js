main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim().split('');
    const r = [];
    for (let i = 0; i < s.length; i++) {
        if (s[i] === '.') {
            console.log(r.join(''));
            return;
        } else {
            r.push(s[i]);
        }
    }
    console.log(r.join(''));
}