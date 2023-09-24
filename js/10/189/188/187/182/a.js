const main = (input) => {
    const A = parseInt(input.trim().split(' ')[0]);
    const B = parseInt(input.trim().split(' ')[1]);

    console.log(getNum(A) - B);

}

function getNum(current) {
    return 2 * current + 100;
}
main(require('fs').readFileSync('/dev/stdin', 'utf8'));