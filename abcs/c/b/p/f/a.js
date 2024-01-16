main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const a = lines[1].split(' ').map(Number);
    const Q = Number(lines[2]);
    const q = lines.slice(3);
    // console.log(q);
    for (let i = 0; i < Q; i++) {
        if (q[i].split(' ').map(Number).length === 3) {
            const [n, k, x] = q[i].split(' ').map(Number);
            a[k - 1] = x;
        } else {
            const [n, k] = q[i].split(' ').map(Number);
            console.log(a[k - 1]);
        }
    }
}