main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const a = lines[1].split(' ').map(Number);
    const b = [...a];
    const c = b.sort((a, b) => b - a);
    // console.log(c);
    const boobie = c[1];
    for (let i = 0; i < N; i++) {
        if (a[i] === boobie) {
            console.log(i + 1);
        }
    }
}