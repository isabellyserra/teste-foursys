function paginate(form, page) {
    $('#page').val(page);
    $('#' + form).submit();
}
