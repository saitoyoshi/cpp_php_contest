main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    let s = lines[0].trim();
    const t = lines[1].trim();
    // console.log(h('z', 1));
    for (let i = 0; i <= 26; i++) {
        if (h(s, i) === t) {
            console.log('Yes');
            return;
        }
        // console.log(h('qqp', i));
    }
    console.log('No');
}

function h(s, k) {
    const l = rangeBetweenChars('a', 'z');
    let a = s.split('');
    const result = [];
    for (const v of a) {
        const i = l.indexOf(v);
        result.push(l[(i + k) % 26]);
    }
    return result.join('');
}

function rangeBetweenChars(start, end) {
    const result = [];
    for (let i = start.charCodeAt(0); i <= end.charCodeAt(0); i++) {
        result.push(String.fromCharCode(i));
    }
    return result;
}