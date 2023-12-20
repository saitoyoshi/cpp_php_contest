main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const s = lines[0];
    const t = lines[1];
    let cnt = 0;
    for (let i = 0; i < s.length; i++) {
        if (s[i] !== t[i]) {
            cnt++;
        }
    }
    console.log(cnt);
}