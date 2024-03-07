main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    let b = [];
    let a = [];
    for (let i = 1; i <= N; i++) {
        const [v1, v2] = lines[i].split(' ').map(Number);
        a.push(v1);
        b.push(v2);
        // console.log(a);
        // console.log(b);
    }
    let res = 100000;
    let v = null;
    for (let j = 0; j < N; j++) {
        for (let k = 0; k < N; k++) {
            if (k === j) {
                v = a[j] + b[j];
                // console.log(v);
            } else {
                v = Math.max(a[j], b[k]);

            }
            // console.log(v);
            // console.log(res);
            if (v < res) {
                res = v;
            }
        }
    }
    console.log(res);
}