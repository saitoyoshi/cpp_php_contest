main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let [m1, d1] = input.trim().split('\n')[0].split(' ').map(Number)
    let [m2, d2] = input.trim().split('\n')[1].split(' ').map(Number)
    isGetumatu(m1, d1, m2, d2) ? console.log(1) : console.log(0);
}

function isGetumatu(m1, d1, m2, d2) {
    return m1 !== m2;
}