main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [r, d, x2000] = input.trim().split(' ').map(Number);
    let ex = r * x2000 - d;
    for (let i = 0; i < 10; i++) {
        console.log(ex);
        ex = r * ex - d;
    }
}