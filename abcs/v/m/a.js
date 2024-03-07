main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const k = Number(lines[1]);
    let num = 1;
    for (let i = 0; i < N; i++) {
        let t1 = num * 2;
        let t2 = num + k;
        if (t1 >= t2) {
            num = t2;
        } else {
            num = t1;
        }
    }
    console.log(num);
}