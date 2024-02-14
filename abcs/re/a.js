main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const s = lines[1].trim();
    let r = b = 0;
    for (let i = 0; i < N; i++) {
        if (s[i] === 'R') {
            r++;
        } else {
            b++;
        }
    }
    if (r > b) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}