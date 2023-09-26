main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim().split('\n')[0];
    let t = input.trim().split('\n')[1];
    let tdash = t.substring(0, s.length);
    s === tdash ? console.log('Yes') : console.log('No');
}