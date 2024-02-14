main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const a = [];
    for (let i = 1; i <= N; i++) {
        const [s, t] = lines[i].trim().split(' ');
        a.push(s + " " + t);
    }
    const b = Array.from(new Set(a));
    // console.log(a.length);
    // console.log(b.length);
    if (a.length !== b.length) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}