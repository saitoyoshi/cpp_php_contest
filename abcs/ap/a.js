main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const Q = Number(lines[0]);
    const arr = [];
    for (let i = 1; i <= Q; i++) {
        const [n, v] = lines[i].split(' ').map(Number);
        if (n === 1) {
            arr.push(v);
        } else {
            console.log(arr[arr.length - v]);
        }
    }
}