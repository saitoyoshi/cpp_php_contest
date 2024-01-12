main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    // const a = [];
    let a = new Map();
    for (let i = 1; i <= N; i++) {
        if (a.has(lines[i].trim())) {
            let curval = a.get(lines[i].trim());
            curval++;
            a.set(lines[i].trim(), curval);
        } else {
            a.set(lines[i].trim(), 0)
        }
    }
    let sa = Array.from(a).sort((a, b) => b[1] - a[1]);
    console.log(sa[0][0]);


}