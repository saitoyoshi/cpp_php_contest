main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const arr = lines[1].split(' ').map(Number);
    const m = Math.min(...arr);
    for (let i = m; i <= N + m; i++) {
        if (!arr.includes(i)) {
            console.log(i);
            return;
        }
    }
}