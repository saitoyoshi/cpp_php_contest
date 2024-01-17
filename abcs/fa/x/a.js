main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [n, m] = lines[0].split(' ').map(Number);
    const a = lines[1].split(' ').map(Number);
    const b = lines[2].split(' ').map(Number);
    const c = [];
    for (const v of a) {
        if (!b.includes(v)) {
            c.push(v);
        }
    }
    for (const v of b) {
        if (!a.includes(v)) {
            c.push(v);
        }
    }
    c.sort((a, b) => a - b);
    console.log(c.join(' '));
}