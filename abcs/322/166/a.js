const { arrayBuffer } = require('stream/consumers');

main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [n, k] = lines[0].split(' ').map(Number);
    let people = myRange(n);
    const data = lines.slice(1);
    let arr = [];
    for (let i = 0; i < 2 * k; i += 2) {
        const d = Number(data[i]);
        arr.push(...data[i + 1].split(' ').map(Number));

    }
    const r = people.filter(person => !arr.includes(person)).length;

    console.log(r);
    // console.log(data);
}

function myRange(num) {
    const result = [];
    for (let i = 1; i <= num; i++) {
        result.push(i);
    }
    return result;
}