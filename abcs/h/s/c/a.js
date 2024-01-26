main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const arr = lines[1].split(' ').map(Number);
    let cnt = 0;
    for (let i = 0; i < N; i++) {
        if (arr[i] === arr[i + 1]) {
            cnt++;
            arr[i + 1] += 101;
        }
    }
    console.log(cnt);
}