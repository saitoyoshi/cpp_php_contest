main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    for (let i = 1; i <= N - 2; i++) {
        let [d1, d2] = lines[i].split(' ').map(Number);
        let [d3, d4] = lines[i + 1].split(' ').map(Number);
        let [d5, d6] = lines[i + 2].split(' ').map(Number);
        if (d1 === d2 && d3 === d4 && d5 === d6) {
            console.log('Yes');
            return;
        }
    }
    console.log('No');
}