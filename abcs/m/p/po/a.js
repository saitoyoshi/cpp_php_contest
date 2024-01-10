main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, M] = lines[0].split(' ').map(Number);
    let s = [];
    s = lines.slice(1, N + 1).map(str => str.trim().slice(-3));
    let t = [];
    t = lines.slice(N + 1).map(str => str.trim());
    let cnt = 0;
    for (const v of s) {
        if (t.includes(v)) {
            cnt++;
        }
    }
    console.log(cnt);
}