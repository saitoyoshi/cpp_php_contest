main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let [a, b, k] = input.trim().split(' ').map(Number);

    if (a >= b) {
        console.log(0);
        return;
    }
    let cnt = 0;
    for (let i = 1; i <= 1000000000; i++) {
        a *= k;
        cnt++;
        if (a >= b) {
            console.log(cnt);
            return;
        }

    }
}