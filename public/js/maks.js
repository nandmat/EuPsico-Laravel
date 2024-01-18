document.addEventListener('input', function (event) {
    let target = event.target;
    if (target.id === 'phone') {
        maskPhoneNumber(target);
    } else if (target.id === 'cpf') {
        maskCpfCnpj(target);
    }
});


function maskPhoneNumber(input) {
    let value = input.value.replace(/\D/g, '');
    value = value.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    input.value = value;
}

function maskCpfCnpj(input) {
    let value = input.value.replace(/\D/g, '');
    if (value.length <= 11) {
        value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
    } else {
        value = value.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, '$1.$2.$3/$4-$5');
    }
    input.value = value;
}

