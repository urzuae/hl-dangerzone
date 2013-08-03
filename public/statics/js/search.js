$(document).ready(function() {
  $('#search_form').submit(function() {
    var data = $(this).serialize();
    $.ajax({
      url: _baseUrl+'admin/user',
      data: data,
      type: 'get',
      dataType: 'json',
      success: function(response) {
        console.log(response);
      }
    });
    return false;
  });
});
