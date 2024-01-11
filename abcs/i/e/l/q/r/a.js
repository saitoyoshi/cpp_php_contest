main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, X] = lines[0].split(' ').map(Number);
    const a = lines[1].split(' ').map(Number);
    const r = a.filter(v => v !== X);
    console.log(r.join(' '));
}