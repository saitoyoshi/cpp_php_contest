const main = (input) => {
    const K = parseInt(input.trim().split('\n')[0]);
    const A = parseInt(input.trim().split('\n')[1].split(' ')[0]);
    const B = parseInt(input.trim().split('\n')[1].split(' ')[1]);
    const multiA = Math.floor((A - 1) / K);
    const multiB = Math.floor((B) / K);
    multiB - multiA >= 1 ? console.log('OK') : console.log('NG');
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));