main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    let [N, K, M] = lines[0].split(' ').map(Number);
    let scores = lines[1].split(' ').map(Number);
    let sum = scores.reduce((acc, cur) => acc + cur, 0);
    const target = M * N - sum;
    if (target > K) {
        console.log(-1);
    } else if (target <= 0) {
        console.log(0);
    } else {
        console.log(target);
    }
}