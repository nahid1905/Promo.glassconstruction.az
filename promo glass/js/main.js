

// Social icons button for phone
document.getElementById('share').addEventListener("click",function(){
  var mini_icons = document.getElementById('mini_icons');
  mini_icons.style.display == "none" ?  mini_icons.style.display = "block" : mini_icons.style.display = "none" ;
});

$('#call').click(function () {
    var phone = $('#phone').val();

    $.ajax({
        type: "POST",
        url: "send.php",
        data: {'phone' : phone},
        success: function (data) {
            $('.message').html(
                '<div class="alert alert-success">' + data +  '</div>'
            );
            setTimeout(function(){
                $('.message').fadeOut("slow");
            }, 5000);
        },
        error:function (data) {
          $('.message').html(
              '<div class="alert alert-danger">' + data + ' </div>'
          )
        }
    });
})


$(document).ready(function(){
    $('#phone').inputmask('', { regex: '994[0-9]{2} [0-9]{3}-[0-9]{2}-[0-9]{2}'})
});

