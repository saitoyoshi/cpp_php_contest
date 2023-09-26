main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const parts = input.trim().split('.')
    console.log(parts[0]);
}