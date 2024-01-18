main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [H, W] = lines[0].split(' ').map(Number);
    const a = lines.slice(1);
    const r = [];
    for (let i = 0; i < W; i++) {
        let cnt = 0;
        for (let j = 0; j < H; j++) {
            if (a[j][i] === '#') {
                cnt++;
            }
        }
        r.push(cnt);
    }
    console.log(r.join(' '));
}