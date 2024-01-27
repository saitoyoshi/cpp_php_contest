main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const a = lines[1].split(' ').map(Number);
    let r = 0;
    for (let i = 0; i < N - 1; i++) {
        if (a[i] > a[i + 1]) {
            r += (a[i] - a[i + 1]);
            a[i + 1] = a[i];
        }
    }
    console.log(r);
}
