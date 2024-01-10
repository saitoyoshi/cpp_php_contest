main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, D] = lines[0].split(' ').map(Number);
    let cnt = 0;
    for (let i = 1; i <= N; i++) {
        const [x, y] = lines[i].split(' ').map(Number);
        const d = Math.sqrt(x ** 2 + y ** 2);
        if (d <= D) {
            cnt++;
        }
    }
    console.log(cnt);
}