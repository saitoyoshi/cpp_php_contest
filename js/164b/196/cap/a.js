main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    let s = input.trim().split('');
    let reds = s.filter(e => e === 'R');
    let blues = s.filter(e => e === 'B');
    reds.length > blues.length ? console.log('Yes') : console.log('No');
}