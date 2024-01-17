main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const s = input.trim();
    let n = 0;
    for (const v of s) {
        n += Number(v);
    }
    // console.log(n);
    // return;
    if (n % 9 === 0) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}