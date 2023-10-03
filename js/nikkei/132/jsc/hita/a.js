main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    const len = s.length;
    if (len % 2 === 1) {
        console.log('No');
        return;
    }
    for (let i = 0; i < len; i++) {
        if (i % 2 === 0) {
            if (s[i] !== 'h') {
                console.log('No');
                return;
            }
        } else {
            if (s[i] !== 'i') {
                console.log('No');
                return;
            }
        }
    }
    console.log('Yes');
}