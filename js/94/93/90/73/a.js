main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    if (s[0] === '9' || s[1] === '9') {
        console.log('Yes');
    } else {
        console.log('No');

    }

}