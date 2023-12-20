main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const arr = lines[1].split(' ').map(Number);
    // console.log(N);
    // console.log(arr);
    let cnt = 0;
    for (let i = 1; i <= N; i += 2) {
        if (arr[i - 1] % 2 === 1) {
            cnt++;
        }
    }
    console.log(cnt);
}