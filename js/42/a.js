const { exit } = require('process');

const main = (input) => {
    const arr = input.trim().split(' ').map(e => parseInt(e));
    const fiveCount = arr.filter(e => e === 5);
    const sevenCount = arr.filter(e => e === 7);
    if (fiveCount.length === 2 && sevenCount.length === 1) {
        console.log('YES');
    } else {
        console.log('NO');
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));