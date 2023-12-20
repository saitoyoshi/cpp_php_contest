main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const r = Number(input.trim());
    console.log(3 * r * r);
}