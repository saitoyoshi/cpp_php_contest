main(require('fs').readFileSync('/dev/stdin', 'utf8'))

function isLower(input) {
    const regex = /^[a-z]$/;
    return regex.test(input);
}

function main(input) {
    let s = input.trim();
    if (isLower(s)) {
        console.log('a');
    } else {
        console.log('A');

    }
}