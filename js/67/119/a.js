main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim().split('/');
    const month = Number(s[1]);
    // console.log(month);
    month <= 4 ? console.log('Heisei') : console.log('TBD');
}