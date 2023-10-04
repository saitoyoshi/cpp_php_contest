main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [a, b, c, d] = input.trim().split(' ').map(Number);
    const s1 = a * b;
    const s2 = c * d;
    (s1 > s2) ? console.log(s1): console.log(s2);
}