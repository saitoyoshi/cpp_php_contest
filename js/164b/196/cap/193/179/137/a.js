main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let [k, x] = input.trim().split(' ').map(Number);
    let start = -(k - 1) + x;
    let end = k - 1 + x;
    const result = createArr(start, end);
    console.log(result.join(' '));
}

function createArr(start, end) {
    const result = [];
    for (let i = start; i <= end; i++) {
        result.push(i);
    }
    return result;;
}