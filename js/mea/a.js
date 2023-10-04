main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    if (s.length === 2) {
        console.log(s);
    } else {
        const rs = s.split('').reverse().join('');
        console.log(rs);
    }
}