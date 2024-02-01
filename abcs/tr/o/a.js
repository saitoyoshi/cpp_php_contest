main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const blocks = [];
    for (let i = 0; i <= 100; i++) {
        blocks[i] = [];
        for (let j = 0; j <= 100; j++) {
            blocks[i][j] = false;
        }
    }
    const N = Number(lines[0]);
    for (let i = 1; i <= N; i++) {
        const [a, b, c, d] = lines[i].split(' ').map(Number);
        for (let j = a; j < b; j++) {
            for (let k = c; k < d; k++) {
                blocks[j][k] = true;
            }
        }
    }
    let cnt = 0;
    for (let i = 0; i <= 100; i++) {
        for (let j = 0; j <= 100; j++) {
            if (blocks[i][j]) {
                cnt++;
            }
        }
    }
    console.log(cnt);
}