main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let [r, D, x] = input.trim().split(' ').map(Number);
    for (let i = 1; i <= 10; i++) {
        let n = r * x - D;
        console.log(n);
        x = n;


    }
}