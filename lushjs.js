

// Carousel Auto-Cycle

$("#textarea").keyup(function() {
			alert("hi");
			$.post("accountupdate.php"), {address:$("#address").val()});
			
		});
	



  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });
  
  
$('.hide-password').on('click', function(){
  var $this= $(this),
    $password_field = $this.prev('input');
    
    ( 'password' == $password_field.attr('type') ) ? $password_field.attr('type', 'text') : $password_field.attr('type', 'password');
    ( 'Hide' == $this.text() ) ? $this.text('Show') : $this.text('Hide');
    //focus and move cursor to the end of input field
    $password_field.putCursorAtEnd();
});

$('#reload').click(function() {
    delay( 800 ).location.reload();
});