const main = (input) => {
    arr = input.trim().split(' ').map(Number).sort((m, n) => m - n);
    console.log(arr[0] + arr[1]);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));