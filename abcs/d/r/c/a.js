main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const a = lines[1].split(' ').map(Number);
    const u = new Set([...a]);
    console.log(u.size);
}