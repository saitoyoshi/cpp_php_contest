main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    // console.log(lines);
    // return;
    const [N, Q] = lines[0].split(' ').map(Number);
    const arr = [];
    for (let i = 1; i <= N; i++) {
        let tarr = lines[i].split(' ').map(Number);
        tarr.shift();
        arr.push(tarr);
    }
    for (let i = N + 1; i <= (N + Q); i++) {
        const [s, t] = lines[i].split(' ').map(Number);
        console.log(arr[s - 1][t - 1]);
    }
    // console.log(arr);
}
