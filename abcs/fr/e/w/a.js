main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim().split('');
    if (s[0] === s[1] && s[1] === s[2] && s[2] === s[3]) {
        console.log('Weak');
        return;
    }
    if ((Number(s[0]) + 1) % 10 === Number(s[1]) && (Number(s[1]) + 1) % 10 === Number(s[2]) && (Number(s[2]) + 1) % 10 === Number(s[3])) {
        console.log('Weak');
        return;
    }
    console.log('Strong');
}