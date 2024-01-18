main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim().split('');
    for (let i = 0; i < s.length; i += 2) {
        if (s[i] === 'L') {
            console.log('No');
            return;
        }
    }
    for (let i = 1; i < s.length; i += 2) {
        if (s[i] === 'R') {
            console.log('No');
            return;
        }
    }
    console.log('Yes');
}