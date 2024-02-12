main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const arr = lines[1].split(' ').map(Number);
    const brr = Array.from(new Set(arr));
    if (arr.length === brr.length) {
        console.log('YES');
    } else {
        console.log('NO');
    }
}