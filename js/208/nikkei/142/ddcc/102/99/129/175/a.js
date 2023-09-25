const main = (input) => {
    let s = input.trim();
    if (s === "RRR") {
        console.log(3);
    } else if (s.includes('RR')) {
        console.log(2);
    } else if (s === 'RSR') {
        console.log(1);
    } else if (s === 'SSS') {
        console.log(0);
    } else if (s.includes('SS')) {
        console.log(1);
    } else if (s === 'SRS') {
        console.log(1);
    } else {
        console.log('E');
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));