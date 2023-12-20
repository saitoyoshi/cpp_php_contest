main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [n, m] = input.trim().split(' ').map(Number);
    if (n === m) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}