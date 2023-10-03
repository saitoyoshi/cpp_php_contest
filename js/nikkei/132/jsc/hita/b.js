main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    let hita = "";
    for (let i = 0; i < 5; i++) {
        hita += 'hi';
        if (hita === s) {
            console.log('Yes');
            return;
        }
    }
    console.log('No');
}