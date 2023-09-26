main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let [m1, d1] = input.trim().split('\n')[0].split(' ').map(Number)
    let [m2, d2] = input.trim().split('\n')[0].split(' ').map(Number)
    isGetumatu(m1, d1, m2, d2) ? console.log(1) : console.log(0);
}

function isGetumatu(m1, d1, m2, d2) {
    if ((m1 === 1 || m1 === 3 || m1 === 5 || m1 === 7 || m1 === 8 || m1 === 10 || m1 === 12) && d1 === 31) {
        return true;
    } else if ((m1 === 4 || m1 === 6 || m1 === 9 || m1 === 11) && d1 === 30) {
        return true;
    } else if (m1 === 2 && d1 === 28) {
        return true;
    } else {
        return false;
    }
}