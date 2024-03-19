main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [N, a, b] = input.trim().split(' ').map(Number);
    const tiles = [];
    for (let i = 1; i <= N; i++) {
        tiles[i] = [];
    }
    for (let i = 1; i <= N; i++) {
        if (i % 2 === 1) {
            for (let j = 1; j <= N; j++) {
                if (j % 2 === 1) {
                    tiles[i][j] = '.';
                } else {
                    tiles[i][j] = '#';
                }
            }
        } else {
            for (let j = 1; j <= N; j++) {
                if (j % 2 === 1) {
                    tiles[i][j] = '#';
                } else {
                    tiles[i][j] = '.';
                }
            }
        }
    }
    for (let i = 1; i <= N * a; i++) {
        for (let j = 1; j <= N * b; j++) {
            process.stdout.write(tiles[Math.ceil(i / a)][Math.ceil(j / b)])
        }
        console.log();
    }
}