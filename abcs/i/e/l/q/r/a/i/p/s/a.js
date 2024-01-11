main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const a = lines.slice(1);
    let u = Array.from(new Set(a));
    if (u.length !== N) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}