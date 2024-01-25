main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    for (let i = 0; i < 1000; i++) {
        for (let j = 0; j < 1000; j++) {
            if (N === f(i, j)) {
                console.log('Yes');
                return;
            }
        }
    }
    console.log('No');
}

function f(x, y) {
    return 2 ** x * 3 ** y;
}
