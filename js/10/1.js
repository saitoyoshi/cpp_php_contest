const main = (input) => {
    // console.log(input.split("\n"));
    const i = input.trim().split('\n');
    const arr = i[1].split(" ");
    const odds = arr.filter(e => parseInt(e) % 2 === 1);
    odds.length % 2 === 0 ?
        console.log('YES') : console.log('NO');
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));