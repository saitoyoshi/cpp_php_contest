main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    for (let i = 1; i <= 9; i++) {
        for (let j = 1; j <= 9; j++) {
            if (i * j === N) {
                console.log('Yes');
                return;
            }
        }
    }
    console.log('No');
}