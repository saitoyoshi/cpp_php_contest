main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    let s = lines.slice(1);
    const r = Array.from(new Set(s)).length;
    console.log(r);
}
