main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim().split('');


    const u = new Set(s);
    if (u.size === s.length) {
        console.log('yes');
        return;
    }
    console.log('no');
}