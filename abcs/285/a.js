main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const a = lines[1].split('');
    for (let i = 1; i < N; i++) {
        let l = 0;
        for (let k = 1; k <= N - i; k++) {
            if (a[k - 1] === a[k - 1 + i]) {
                break;
            }
            l++;
        }
        console.log(l);
    }
}