const main = (input) => {
    let [x, y] = input.trim().split(' ').map(Number);
    let sum = 0;
    if (x === 1 && y === 1) {
        sum += 400000;
    }
    sum += (calcMoney(x) + calcMoney(y));
    console.log(sum);
}

function calcMoney(n) {
    if (n === 1) {
        return 300000;
    } else if (n === 2) {
        return 200000;
    } else if (n === 3) {
        return 100000;
    } else {
        return 0;
    }
}
main(require('fs').readFileSync('/dev/stdin', 'utf8'));