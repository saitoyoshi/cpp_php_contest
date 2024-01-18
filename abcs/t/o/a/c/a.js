main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const p = lines.slice(1).map(Number);
    p.sort((a, b) => b - a);
    p[0] = p[0] / 2;
    console.log(sumArr(p));
}

function sumArr(arr) {
    return arr.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
}