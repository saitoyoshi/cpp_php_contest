main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    // console.log(lines);
    // return;
    const N = lines[0];
    let arr = [];
    for (let i = 1; i <= N; i++) {
        let s = lines[i];
        // console.log(s);
        if (!cond1(s[0]) || !(cond2(s[1]))) {
            // console.log(1);
            console.log('No');
            return;
        }
        if (arr.includes(s)) {
            // console.log(2);
            console.log('No');
            return;
        }
        arr.push(s);
    }
    console.log('Yes');
}

function cond1(ch) {
    return ch === 'H' || ch === 'D' || ch === 'C' || ch === 'S';
}

function cond2(ch) {
    const arr = [
        'A', '2', '3', '4', '5', '6', '7', '8', '9', 'T', 'J', 'Q', 'K',
    ];
    return arr.includes(ch);
}