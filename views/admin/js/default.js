
$(document).ready(function() 
{   
	jQuery.expr[':'].Contains = function(a, i, m) {
	  return jQuery(a).text().toUpperCase()
	      .indexOf(m[3].toUpperCase()) >= 0;
	};

	$('.main-header-search input').keyup(function() {
		$('.info').hide();
  
	  var searchQuery = $(this).val();
  
	  if ( searchQuery === '' ) {
	    $('.section-search-results').hide();
	  } else {
	    $('.section-search-results').show();
	  }
  
	  $('.section-search-results li').hide();
	  $('.section-search-results li:Contains(' + searchQuery + ')').show();
  
	});
	
	  $('.clickOn').click(function(){
		var search = document.getElementsByName("inputSearch");
		search.value = "";
	    $('.section-search-results').hide();
		$('.info').show();
	});
	
    /*
    $("#id").click(function() 
    {    

        return false;
    });  
*/

});
