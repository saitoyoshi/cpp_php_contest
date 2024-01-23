main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    let a = lines[1].split(' ').map(Number);
    let b = [];
    for (const v of a) {
        b = h(b, v);
    }
    console.log(b.filter(e => e >= 4).length);
}

function h(a, n) {
    a.push(0);
    return a.map(e => e + n);
}