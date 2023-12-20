main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const n = lines[0];
    const s = lines[1];
    if (s[n - 1] === 'o') {
        console.log('Yes');
    } else {
        console.log('No');
    }
}