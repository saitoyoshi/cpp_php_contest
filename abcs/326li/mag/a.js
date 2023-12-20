const { exit } = require('process');

main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, s, d] = lines[0].split(' ').map(Number);
    for (let i = 1; i <= N; i++) {
        const [x, y] = lines[i].split(' ').map(Number);
        if (x < s && y > d) {
            console.log('Yes');
            return;
        }
    }
    console.log('No');
}