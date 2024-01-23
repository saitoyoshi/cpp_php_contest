main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const a = lines[1].split(' ').map(Number);
    const b = lines[2].split(' ').map(Number);
    const c = lines[3].split(' ').map(Number);
    let r = b.reduce((a, c) => a + c, 0);
    // console.log(r);
    const t = [];
    for (let i = 0; i < N - 1; i++) {
        if (a[i] + 1 === a[i + 1]) {
            t.push(a[i]);
        }
    }
    for (const v of t) {
        r += c[v - 1];
    }
    console.log(r);
}