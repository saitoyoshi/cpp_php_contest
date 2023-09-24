const { exit } = require('process');

const main = (input) => {
    let [x, y] = input.trim().split(' ').map(e => parseInt(e));
    if (x === 2 || y === 2) {
        console.log('No');
        return;
    }
    const group1 = [1, 3, 5, 7, 8, 10, 12];
    const group2 = [4, 6, 9, 11];
    if (group1.includes(x) && group1.includes(y)) {
        console.log('Yes');
    } else if (group2.includes(x) && group2.includes(y)) {
        console.log('Yes');
    } else {
        console.log('No');

    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));