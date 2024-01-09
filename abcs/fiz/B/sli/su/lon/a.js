main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = lines[0];
    // console.log(lines);
    let pos = [];
    for (let i = 1; i <= N; i++) {
        pos.push(lines[i].split(' ').map(Number));
    }
    // console.log(pos);
    let l = [];
    for (let i = 0; i < N; i++) {
        for (let j = i + 1; j < N; j++) {
            l.push(Math.sqrt((pos[i][0] - pos[j][0]) ** 2 + (pos[i][1] - pos[j][1]) ** 2));
        }
    }
    console.log(Math.max(...l));
}