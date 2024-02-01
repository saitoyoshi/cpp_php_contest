const { NOMEM } = require('dns');

main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const [D, X] = lines[1].split(' ').map(Number);
    let cnt = 0;
    for (let i = 2; i <= N + 2; i++) {
        const a = Number(lines[i]);
        for (let j = 0; j <= D; j++) {
            if (a * j + 1 <= D) {
                cnt++;
            }
        }
    }
    console.log(cnt + X);
}