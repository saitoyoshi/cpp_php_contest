const main = (input) => {
    let arr = input.trim().split(' ').map(e => parseInt(e));
    arr = arr.sort((m, n) => m - n);
    let [a1, a2, a3] = arr;
    console.log(a3 - a1);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));