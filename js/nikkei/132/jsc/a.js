main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [x, y, z] = input.trim().split(' ').map(Number);
    let tmp = y * z / x;
    if (Number.isInteger(tmp)) {
        console.log(tmp - 1);
    } else {
        console.log(Math.floor(tmp));
    }
}