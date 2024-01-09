main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    let remain = 15 - s.length;
    let maru_num = s.match(new RegExp('o', 'g'));
    // console.log(maru_num);
    // return;
    let win = maru_num ? maru_num.length : 0;
    let needs = 8 - win;
    if (needs <= remain) {
        console.log('YES');
    } else {
        console.log('NO');
    }
}