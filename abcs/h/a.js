main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const arr = lines[1].split(' ').map(e => e.trim());
    // console.log(arr);
    if (arr.includes('Y')) {
        console.log('Four');
    } else {
        console.log('Three');
    }
}