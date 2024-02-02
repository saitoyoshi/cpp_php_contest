main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, M] = lines[0].split(' ').map(Number);
    const arr = lines[1].split(' ').map(Number);

    const sum = arr.reduce((a, c) => a + c, 0);
    const d = sum / (4 * M);
    const cnt = arr.filter(v => v >= d).length;
    if (cnt >= M) {
        console.log("Yes");
    } else {
        console.log('No');
    }
}