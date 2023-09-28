main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim().split('');;
    s = s.sort();
    s = s.join('');
    s === 'abc' ? console.log('Yes') : console.log('No');
}