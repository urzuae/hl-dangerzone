$(document).ready(function() {
  $('#search_form').submit(function() {
    var data = $(this).serialize();
    $.ajax({
      url: _baseUrl+'admin/user',
      data: data,
      type: 'get',
      success: function(response) {
        $('#main_content').html(response);
      }
    });
    return false;
  });
});
