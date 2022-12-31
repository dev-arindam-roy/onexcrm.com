$.validator.addMethod("checklower", function(value) {
    return /[a-z]/.test(value);
});
$.validator.addMethod("checkupper", function(value) {
    return /[A-Z]/.test(value);
});
$.validator.addMethod("checkdigit", function(value) {
    return /[0-9]/.test(value);
});
$.validator.addMethod("checksymbol", function(value) {
    return /[!@#$%&*]/.test(value);
});
$.validator.addMethod("onlytext", function(value) {
    return /^[A-Za-z]+$/.test(value);
});
$.validator.addMethod("textwithspace", function(value) {
    return /^[A-Z a-z]+$/.test(value);
});
const disposableEmailDomain = ['mailinator.com', 'yopmail.com', 'falltrack.net', 'tmmbt.com', 'explodemail.com'];
$.validator.addMethod("disposableEmail", function(value, element, params) {
    var domain = value.split('@')[1];
    return !disposableEmailDomain.includes(domain.toLowerCase());
});