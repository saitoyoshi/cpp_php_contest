main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');

    const [H, W] = (lines[0]).split(' ').map(Number);
    const arr = [];
    let min = 101;
    for (let i = 1; i <= H; i++) {
        arr.push(lines[i].split(' ').map(Number));
        const n = Math.min(...lines[i].split(' ').map(Number));
        if (n < min) {
            min = n;
        }
    }
    let cnt = 0;
    for (let i = 0; i < H; i++) {
        for (let j = 0; j < W; j++) {
            if (arr[i][j] !== min) {
                cnt += (arr[i][j] - min);
            }

        }
    }
    console.log(cnt);
    // const a = lines.slice(1).map(e => e.split(' ').map(Number));
    // console.log(a);
}