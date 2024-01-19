main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    // const a = lines.slice(1);
    // console.log(a);
    let result = 0;
    for (let i = 1; i <= N; i++) {
        let [x, u] = lines[i].split(' ');
        x = Number(x);
        if (u === 'JPY') {
            result += x;
        } else {
            result += (x * 380000.0)
        }
    }
    console.log(result);
}