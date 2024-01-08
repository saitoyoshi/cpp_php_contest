main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    let a = [];
    for (let i = 0; i < 8; i++) {
        if (s[i] === 'B') {
            a.push(i);
        }
    }
    // console.log(a);
    if ((a[0] + a[1]) % 2 === 0) {
        console.log('No');
        return;
    }
    a = [];
    for (let i = 0; i < 8; i++) {
        if (s[i] === 'R') {
            a.push(i);
        }
    }
    const kpos = s.indexOf('K');
    if (!(a[0] < kpos && kpos < a[1])) {
        console.log('No');
        return;
    }
    console.log('Yes');
}