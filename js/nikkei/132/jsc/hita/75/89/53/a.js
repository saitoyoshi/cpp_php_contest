main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    N < 1200 ? console.log('ABC') : console.log('ARC');
}