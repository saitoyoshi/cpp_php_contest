main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, K] = lines[0].split(' ').map(Number);
    let s = [];
    for (let i = 1; i <= N; i++) {
        s.push(lines[i].trim());
    }
    // console.log(s);
    s = s.slice(0, K);
    s.sort();
    for (const v of s) {
        console.log(v);
    }
}