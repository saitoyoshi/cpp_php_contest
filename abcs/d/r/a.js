main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    // const r = new Map();
    let a = [];
    for (let i = 1; i <= N; i++) {
        let s = lines[i].trim();
        let win = 0;
        for (let j = 0; j < s.length; j++) {
            if (s[j] === 'o') {
                win++;
            }
        }
        // r.set(i, win);
        // a.splice(i, 0, win);
        a.push({ index: i, win });
    }
    a.sort((a, b) => b.win - a.win);
    const keys = a.map(item => item.index);
    console.log(keys.join(' '));
}