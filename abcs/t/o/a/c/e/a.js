main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    let s = lines[1].trim();
    if (N % 2 !== 0) {
        console.log('No');
        return;
    }
    let sub = s.substr(0, N / 2);
    if (sub.repeat(2) === s) {
        console.log('Yes');
    } else {
        console.log('No');
    }
    // console.log(sub);
}