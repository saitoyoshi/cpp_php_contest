main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, M, T] = lines[0].split(' ').map(Number);
    let remain = N;
    let s = 0;
    for (let i = 1; i < M + 1; i++) {
        const [a, b] = lines[i].split(' ').map(Number);
        remain -= (a - s);
        if (remain <= 0) {
            console.log('No');
            return;
        }
        let charge = b - a;
        remain += charge;
        if (remain >= N) {
            remain = N;
        }
        s = b;
    }
    remain -= T - s;
    if (remain > 0) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}