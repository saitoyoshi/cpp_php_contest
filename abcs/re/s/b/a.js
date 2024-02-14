main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [tHp, tAtk, aHp, aAtk] = input.trim().split(' ').map(Number);
    const tTimes = Number(Math.ceil(aHp / tAtk) - 1);
    const aTimes = Number(Math.ceil(tHp / aAtk));
    if (tTimes >= aTimes) {
        console.log('No');
    } else {
        console.log('Yes');
    }
}