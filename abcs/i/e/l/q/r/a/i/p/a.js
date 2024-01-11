main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    let r = 1000000000;
    for (let i = 1; i <= N; i++) {
        let [a, p, x] = lines[i].split(' ').map(Number);
        if (x - a > 0 && r > p) {
            r = p;
        }
    }
    if (r === 1000000000) {
        console.log(-1);
        return;
    }
    console.log(r);
}