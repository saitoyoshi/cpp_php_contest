const main = (input) => {
    let [str1, str2] = input.trim().split('\n');
    if (str1[0] === str2[2] && str1[1] === str2[1] && str1[2] === str2[0]) {
        console.log('YES');
    } else {
        console.log('NO');
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));