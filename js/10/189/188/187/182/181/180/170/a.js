const main = (input) => {
    const arr = [...(input.trim().split(' '))];

    console.log(arr.indexOf('0') + 1);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));