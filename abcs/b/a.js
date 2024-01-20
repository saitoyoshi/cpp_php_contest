main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const n = Number(lines[0]);
    const s = lines[1].trim();
    console.log(shift(s, n));
}

function shift(s, n) {
    return s.split('').map(c => (String.fromCharCode((c.charCodeAt(0) - 65 + n) % 26 + 65))).join('');
}