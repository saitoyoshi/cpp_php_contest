main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const arr = input.trim().split(' ').map(Number);
    // console.log(arr);
    const [a, b, c] = [arr[0], arr[1], arr[2]];
    if ((a === b && b !== c) || (b === c && c !== a) || (c === a && a !== b)) {
        console.log("Yes");
    } else {
        console.log("No");
    }
}
