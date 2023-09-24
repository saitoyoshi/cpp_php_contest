const main = (input) => {
    // console.log(input);
    const str = input;
    if (str[0] === str[1] && str[1] === str[2]) {
        console.log('Won');
    } else {
        console.log('Lost');
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));