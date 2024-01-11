const main = input => {
    const X = BigInt(input.trim());
    const lastNum = input.trim().split('')[input.trim().length - 1];

    if (X < 0) {
        if (lastNum === '0') {
            console.log(String(X / BigInt(10)));
        } else {
            console.log(String((X / BigInt(10)) - BigInt(1)));
        }
    } else {
        console.log(String(X / BigInt(10)));
    }
}

const input = require('fs').readFileSync('/dev/stdin', 'utf8');
main(input);