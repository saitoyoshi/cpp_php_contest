main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let [a, b] = input.trim().split(' ');
    // console.log(typeof(a));
    a = a.split('').reverse().join('');
    b = b.split('').reverse().join('');
    // console.log(a);
    const len = (a.length >= b.length) ? b.length : a.length;
    for (let i = 0; i < len; i++) {
        const n1 = Number(a[i]);
        const n2 = Number(b[i]);
        if (n1 + n2 >= 10) {
            console.log('Hard');
            return;
        }

    }
    console.log('Easy');
}