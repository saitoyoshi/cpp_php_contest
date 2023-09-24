const main = (input) => {
    let [a, b, c] = input.trim().split(' ');
    if (a[a.length - 1] === b[0] && b[b.length - 1] === c[0]) {
        console.log('YES');
    } else {
        console.log('NO');
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));