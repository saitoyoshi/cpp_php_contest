main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [H, W] = lines[0].split(' ').map(Number);
    const s = lines.slice(1);
    // console.log(s);
    const pos = [];
    for (let i = 0; i < H; i++) {
        for (let j = 0; j < W; j++) {
            if (s[i][j] === 'o') {
                pos.push([i, j]);
            }
        }
    }
    console.log(Math.abs(pos[0][0] - pos[1][0]) + Math.abs(pos[0][1] - pos[1][1]));

}