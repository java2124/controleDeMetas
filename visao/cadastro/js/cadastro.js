
$(function () {
    $('form').on('submit', function (e) {
        e.preventDefault();
        window.location.href = '/login/login.html';
    });
});