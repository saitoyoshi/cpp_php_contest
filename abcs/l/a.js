main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const s = lines[0].trim();
    const t = lines[1].trim();
    if (s.includes(t)) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}