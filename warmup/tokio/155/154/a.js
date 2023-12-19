main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const s = lines[0].split(' ')[0];
    const t = lines[0].split(' ')[1];
    const a = lines[1].split(' ')[0];
    const b = lines[1].split(' ')[1];
    const u = lines[2].trim();
    if (s === u) {
        console.log((a - 1) + ' ' + b);
    } else {
        console.log(a + ' ' + (b - 1));

    }
}
