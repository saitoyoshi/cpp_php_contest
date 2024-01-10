main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const l = lines[1].split(' ').map(Number);
    l.sort((a, b) => b - a);
    const longest = l[0];
    let sum = 0;
    for (let i = 1; i < N; i++) {
        sum += l[i];
    }
    if (sum > longest) {
        console.log('Yes');
    } else {
        console.log('No');

    }
}