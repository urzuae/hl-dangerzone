$(document).ready(function() {
  if($('#terms').is(':checked')) {
    $('#terms').attr('checked', false);
  }

  $('#terms').click(function() {
    if($('#terms').is(':checked'))
    {
      $('#submit').removeClass('disabled').attr('disabled', false);
    }
    else
    {
      $('#submit').addClass('disabled').attr('disabled', true);
    }
  });

  $('#login').submit(function() {
    if($('#terms').is(':checked'))
      return true;
    else
      return false;
  });
});
