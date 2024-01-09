main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = lines[0];
    const s = lines[1];
    const k = lines[2];
    const c = s[k - 1];
    for (let i = 0; i < N; i++) {
        if (s[i] === c) {
            process.stdout.write(c);
        } else {
            process.stdout.write('*');
        }
    }
    console.log();
}