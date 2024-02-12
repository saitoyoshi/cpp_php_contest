main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const s = lines[0].trim().split('');
    const t = lines[1].trim().split('');
    for (let i = 0; i < s.length; i++) {
        if (s[i] !== t[i]) {
            console.log(i + 1);
            return;
        }
    }
    console.log(s.length + 1);
}