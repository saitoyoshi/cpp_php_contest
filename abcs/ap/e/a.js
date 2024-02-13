main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    const pat = /^A*B*C*$/;
    console.log(pat.exec(s));
    return;
    if (pat.test(s)) {
        console.log('Yes');
    } else {
        console.log('No');

    }
}