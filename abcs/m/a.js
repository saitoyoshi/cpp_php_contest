main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    let a = s.split('');
    a.sort();
    console.log(a.join(''));
}