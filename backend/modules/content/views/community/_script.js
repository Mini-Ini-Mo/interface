$('#cqname').autocomplete({
    source: function (request, response) {
        var result = [];
        var limit = 10;
        var term = request.term.toLowerCase();
        $.each(_opts.community, function () {
            var menu = this;
            if (term == '' || menu.shequ_name.toLowerCase().indexOf(term) >= 0 ||
                (menu.cqname && menu.cqname.toLowerCase().indexOf(term) >= 0) ||
                (menu.route && menu.route.toLowerCase().indexOf(term) >= 0)) {
                result.push(menu);
                limit--;
                if (limit <= 0) {
                    return false;
                }
            }
        });
        response(result);
    },
    focus: function (event, ui) {
        $('#cqname').val(ui.item.shequ_name);
        return false;
    },
    select: function (event, ui) {
        $('#cqname').val(ui.item.shequ_name);
        $('#cqid').val(ui.item.qid);
        return false;
    },
    search: function () {
        $('#cqid').val('');
    }
}).autocomplete("instance")._renderItem = function (ul, item) {
    return $("<li>")
        .append($('<a>').append($('<b>').text(item.shequ_name)).append('<br>')
            .append($('<i>').text(item.cqname + ' | ' + item.route)))
        .appendTo(ul);
};