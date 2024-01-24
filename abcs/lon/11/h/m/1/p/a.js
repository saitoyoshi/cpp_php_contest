main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const one = ['AB', 'BA', 'BC', 'CB', 'CD', 'DC', 'DE', 'ED', 'EA', 'AE'];
    const another = ['AC', 'CA', 'AD', 'DA', 'BD', 'DB', 'BE', 'EB', 'CE', 'EC', 'CA', 'AC'];
    const lines = input.trim().split('\n');
    const s = lines[0].trim();
    const t = lines[1].trim();
    if (which(s, one, another) === which(t, one, another)) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}

function which(s, o, a) {
    if (a.includes(s)) {
        return 1;
    }
    if (o.includes(s)) {
        return 2;
    }
}
