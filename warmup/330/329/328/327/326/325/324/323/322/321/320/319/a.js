main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    let keys = [
        'tourist',
        'ksun48',
        'Benq',
        'Um_nik',
        'apiad',
        'Stonefeang',
        'ecnerwala',
        'mnbvmar',
        'newbiedmy',
        'semiexp',
    ];
    let values = [
        3858, 3679, 3658, 3648, 3638, 3630, 3613,
        3555, 3516, 3481
    ];
    let data = new Map(keys.map(function(value, index) {
        return [value, values[index]];
    }));
    // console.log(data);
    console.log(data.get(s));
}