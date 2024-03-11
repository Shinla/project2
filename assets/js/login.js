document.getElementById('termsCheckbox').addEventListener('change', function () {
    var checkboxAlert = document.getElementById('checkboxAlert');
    checkboxAlert.style.display = this.checked ? 'none' : 'block';
});

document.getElementById('termsCheckbox').addEventListener('invalid', function () {
    var checkboxAlert = document.getElementById('checkboxAlert');
    checkboxAlert.style.display = 'block';
});
