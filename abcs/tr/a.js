main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const arr = lines[1].split(' ').map(Number);
    arr.sort();
    // console.log(arr);
    const m = arr[0];
    const M = arr[arr.length - 1];
    console.log(M - m);
}