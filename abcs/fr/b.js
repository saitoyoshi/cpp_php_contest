main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim().split('');
    const a = {};
    for (let i = 97; i <= 122; i++) {
        let ch = String.fromCharCode(i);
        a[ch] = 0;
    }
    for (const v of s) {
        a[v]++;
    }
    let entries = Object.entries(a).sort((a, b) => {
        if (a[1] === b[1]) {
            return a[0].localeCompare(b[0]);
        } else {
            return b[1] - a[1];
        }
    })
    console.log(entries[0][0]);
}