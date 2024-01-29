main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, T] = (lines[0]).split(' ').map(Number);
    let r = 1001;
    for (let i = 1; i <= N; i++) {
        const [c, t] = lines[i].split(' ').map(Number);
        if (t <= T) {
            if (r > c) {
                r = c;
            }
        }
    }
    if (r === 1001) {
        console.log('TLE');
    } else {
        console.log(r);
    }
}
