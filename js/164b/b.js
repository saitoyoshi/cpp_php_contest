main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let [takaHP, takaAtk, aokiHP, aokiAtk] = input.trim().split(' ').map(Number);
    let aokiAtkTimes = Math.ceil(takaHP / aokiAtk);
    let takaAtkTimes = Math.ceil(aokiHP / takaAtk);
    takaAtkTimes <= aokiAtkTimes ? console.log('Yes') : console.log('No');
}