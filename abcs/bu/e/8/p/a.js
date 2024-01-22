main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, M] = lines[0].split(' ').map(Number);
    let a = lines[1].split(' ').map(Number);
    const b = lines[2].split(' ').map(Number);
    for (const v of b) {
        if (a.includes(v)) {
            const i = a.indexOf(v);
            a.splice(i, 1);

        } else {
            console.log('No');
            return;
        }
    }
    console.log('Yes');
}