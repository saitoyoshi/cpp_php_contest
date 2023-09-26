main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let [takaHP, takaAtk, aokiHP, aokiAtk] = input.trim().split(' ').map(Number);
    while (1) {
        aokiHP -= takaAtk;
        if (aokiHP <= 0) {
            console.log('Yes');
            return;
        }
        takaHP -= aokiAtk;
        if (takaHP <= 0) {
            console.log('No');
            return;
        }
    }
}