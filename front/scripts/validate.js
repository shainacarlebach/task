
$( "form" ).submit(function( event ) {
    if ( $( "#validationServer01" ).val() === "correct"  && $( "#validationServer02" ).val() === "correct"
     && $( "#validationServer03" ).val() === "correct")  {
      $( "span" ).text( "Validated..." ).show();
      return;
    }
   
    $( "span" ).text( "Not valid!" ).show().fadeOut( 1000 );
    event.preventDefault();
});