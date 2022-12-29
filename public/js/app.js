$('#search_input').donetyping(function() {
    if($(this).val() == '') {
        return;
    }

    $('#search_results_container').addClass('loading');
    $.ajax({
        url: '/ajax/search',
        type: 'post',
        data: {
            keyword: $(this).val()
        },
        success: function(resp){
            $('#search_results_container').removeClass('loading');

            $('#search_results_body .search__body').html(resp);
        }
    })
})