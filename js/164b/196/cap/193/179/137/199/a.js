main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const A = lines[1].split(' ').map(Number);
    const B = lines[2].split(' ').map(Number);
    const maxA = Math.max(...A);
    const minB = Math.min(...B);
    if (minB < maxA) {
        console.log(0);
        return;
    }
    console.log(minB - maxA + 1);

}