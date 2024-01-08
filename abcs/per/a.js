main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    // console.log(s.split(''));
    const arr = s.split('');
    if (isEachDiffs(arr) && isInUpper(arr) && isInLower(arr)) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}

function isEachDiffs(a) {
    const len = a.length;
    let uniqueArr = a.filter((v, i, s) => {
        return s.indexOf(v) === i;
    });
    return len === uniqueArr.length;
}

function isInUpper(a) {
    let uppercases = Array.from({ length: 26 }, (_, i) => {
        return String.fromCharCode(65 + i)
    });
    for (const v of a) {
        if (uppercases.includes(v)) {
            return true;
        }
    }
    return false;
}

function isInLower(a) {
    let lowercases = Array.from({ length: 26 }, (_, i) => {
        return String.fromCharCode(97 + i)
    });
    for (const v of a) {
        if (lowercases.includes(v)) {
            return true;
        }
    }
    return false;
}