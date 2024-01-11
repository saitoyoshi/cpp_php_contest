main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, Q] = lines[0].split(' ').map(Number);
    let a = new Array(N).fill(0);
    for (let i = 1; i <= Q; i++) {
        const [c, x] = lines[i].split(' ').map(Number);
        // console.log(c, x);
        if (c === 1) {
            a[x - 1]++;
            // console.log(a);
        } else if (c === 2) {
            a[x - 1] += 2;
            // console.log(a);
        } else {
            if (a[x - 1] >= 2) {
                console.log('Yes');
            } else {
                console.log('No');
            }
        }
    }
}