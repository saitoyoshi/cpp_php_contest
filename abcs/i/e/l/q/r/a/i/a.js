main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const a = lines[1].split(' ').map(Number);
    const b = lines[2].split(' ').map(Number);
    const l = Math.max(...a);
    const u = Math.min(...b);
    if (l > u) {
        console.log(0);
    } else {
        console.log(u - l + 1);
    }

}