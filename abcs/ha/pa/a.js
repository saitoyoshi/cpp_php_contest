main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [n, m] = lines[0].split(' ').map(Number);
    let a = lines[1].split(' ').map(Number);
    let b = lines[2].split(' ').map(Number);
    // console.log(a, b);
    for (const v of b) {
        let k = a.indexOf(v);
        if (k !== -1) {
            a.splice(k, 1);
        } else {
            console.log('No');
            return;
        }
    }
    console.log('Yes');

}