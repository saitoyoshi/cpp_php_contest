main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, H, W] = lines[0].split(' ').map(Number);
    let cnt = 0;
    for (let i = 1; i <= N; i++) {
        const [a, b] = lines[i].split(' ').map(Number);
        if (a >= H && b >= W) {
            cnt++;
        }
    }
    console.log(cnt);
}