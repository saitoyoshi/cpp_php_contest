main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = lines[0];
    const arr = lines[1].split(' ').map(Number);
    let sum = 0;
    for (let i = 0; i < N; i++) {
        // console.log(arr[i]);
        sum += 1 / arr[i];
        // sum += 1 / Number(lines[i]);
    }
    console.log(1 / sum);
}