main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    // console.log(sn(N));
    if (N % sn(N) === 0) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}

function sn(n) {
    const a = String(n).split('');
    let r = 0;
    for (const v of a) {
        r += Number(v);
    }
    return r;
}