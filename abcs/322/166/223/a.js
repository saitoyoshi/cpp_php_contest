main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    const len = s.length;
    const a = [];
    for (let i = 0; i < len; i++) {
        let substr = s.substr(1);
        a.push(substr + s[0]);
        s = substr + s[0];
    }
    a.sort();
    console.log(a[0]);
    console.log(a[a.length - 1]);
}