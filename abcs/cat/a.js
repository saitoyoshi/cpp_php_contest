main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const s = lines[1].trim();
    console.log(s.replace(/na/g, 'nya'));
}