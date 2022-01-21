// edit category name
 $(document).on('click', '.CategoryEditModal', function (e) {
    e.preventDefault();
    var category_id = $(this).val();
    // alert(category_id);
    $('#CategoryEditModal').modal('show');
    $.ajax({
        type: "GET",
        url: base_url + "/edit-category/" + category_id,
        success: function (response) {
            if (response.status == 404) {
                $('#success_message').addClass('alert alert-success');
                $('#success_message').text(response.message);
                $('#CategoryEditModal').modal('hide');
            } else {
                // console.log(response.category.category_name);
                $('#id').val(response.category.id);
                $('#category_name').val(response.category.category_name);
                $('#message').val(response.category.sort_desc);
            }
        }
    });
    $('.btn-close').find('input').val('');

});
 // end cotegory edit list