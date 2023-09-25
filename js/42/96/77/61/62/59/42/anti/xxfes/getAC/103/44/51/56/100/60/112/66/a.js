const main = (input) => {
    let arr = input.trim().split(' ').map(e => parseInt(e));
    arr = arr.sort((m, n) => m - n);
    console.log(arr[0] + arr[1]);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));