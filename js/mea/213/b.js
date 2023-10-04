main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b] = input.trim().split(' ').map(Number);
    for (let c = 0; c <= 255; c++) {
        if ((a ^ c) === b) {
            console.log(c);
        }
    }
}