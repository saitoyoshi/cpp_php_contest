const main = (input) => {
    const numstr = input.trim();
    let cnt = 0;
    for (let i = 0; i < numstr.length; i++) {
        if (numstr[i] === '2') {
            cnt++;
        }
    }
    console.log(cnt);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));