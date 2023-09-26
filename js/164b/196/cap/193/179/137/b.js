main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let [k, x] = input.trim().split(' ').map(Number);
    let start = -(k - 1) + x;
    let end = k - 1 + x;

    for (let i = start; i < end; i++) {
        console.log(i + ' ');
    }
    console.log(end);
}