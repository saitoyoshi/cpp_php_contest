const main = (input) => {
    let i = input.trim().split('\n');
    cmd = parseInt(i[0]);
    if (cmd === 1) {
        console.log('Hello World');
    } else {
        let a = parseInt(i[1]);
        let b = parseInt(i[2]);
        console.log(a + b);
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));