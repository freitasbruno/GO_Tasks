(function(){
	$('.content-blog').masonry({
	  itemSelector: '.item'
	});
	$('.content-projects').masonry({
	  itemSelector: '.item'
	});
})();

var currentPage = location;

$("#bs-example-navbar-collapse-1 ul li a").each(function(){
  if($(this).attr("href") == currentPage ){
  	console.log(location);
  	$(this).parent().addClass("active");
  }
});