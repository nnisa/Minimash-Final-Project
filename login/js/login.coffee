$(document).ready ->
  $("#submit").click ->
    email = $("#myemail").val()
    password = $("#mypassword").val()
    if (email is "") or (password is "")
      $("#message").html "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please enter an email address and a password</div>"
    else
      $.ajax
        type: "POST"
        url: "checklogin.php"
        data: "myemail=" + email + "&mypassword=" + password
        success: (html) ->
          if html is "true"
            window.location = "index.php"
          else
            $("#message").html html

        beforeSend: ->
          $("#message").html "<p class='text-center'><img src='images/ajax-loader.gif'></p>"

    false

