main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, p] = input.trim().split(' ').map(Number);
    const s = Math.floor((a * 3 + p) / 2);
    console.log(s);
}
