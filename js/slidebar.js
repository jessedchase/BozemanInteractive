$( document ).ready(function() {
	setTimeout( function(){
        $( "#header" ).removeClass( "initial" ).addClass( "closed" );
    },1000);
	setTimeout( function(){
		$( "#slidetextbracketleft").slideToggle('slow');
		$( "#slidetextbracketright").slideToggle('slow');
	},1500);
    $( "#burgerMenuIcon" ).click(function() {
	  if($( "#header" ).hasClass( "closed" )){
		  $( "#header" ).removeClass( "closed" ).addClass( "open" );
		  $( "body" ).removeClass( "cSide" ).addClass( "oSide" );
		  $( "#header.open ul li.hassubnav" ).click(function() {
		  	var next = $(this).parent().next('ul');
		  	$(this).children("ul").slideToggle( "slow", function() {
		});
	});
	  }else{
		  $( "#header" ).removeClass( "open" ).addClass( "closed" );
		  $( "body" ).removeClass( "oSide" ).addClass( "cSide" );
	  }
	});

});
