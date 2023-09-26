main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim().split('\n')[0]);
    const lines = input.trim().split('\n');
    let min = 1000000000;
    for (let i = 1; i <= N; i++) {
        let [a, p, x] = lines[i].split(' ').map(Number);
        if (x - a > 0) {
            if (p < min) {
                min = p;
            }
        }
    }
    if (min !== 1000000000) {
        console.log(min);
    } else {
        console.log(-1);
    }
}