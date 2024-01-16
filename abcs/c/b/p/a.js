main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const s = lines[0].trim();
    const t = lines[1].trim();
    const len = s.length;
    for (let i = 0; i < len; i++) {
        if (s[i] !== t[i]) {
            console.log('No');
            return;
        }
    }
    console.log('Yes');
}