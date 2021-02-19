$(document).ready(function() {
	var track_load = 0; //total loaded record group(s)
	var loading  = false; //to prevents multipal ajax loads
	var total_groups = <?=$total_groups;?>; //total record group(s)

	$('.col-4').load("./contenido/autocarga_juegos.php", {'group_no':track_load}, function() {track_load++;}); //load first group

	$(window).scroll(function() { //detect page scroll

		if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
		{

			if(track_load <= total_groups && loading==false) //there's more data to load
			{
				loading = true; //prevent further ajax loading
				$('.animation_image').show(); //show loading image

				//load data from the server using a HTTP POST request
				$.post('./contenido/autocarga_juegos.php',{'group_no': track_load}, function(data){

					$(".col-4").append(data); //append received data into the element

					//hide loading image
					$('.animation_image').hide(); //hide loading image once data is received

					track_load++; //loaded group increment
					loading = false;

				}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?

					alert(thrownError); //alert with HTTP error
					$('.animation_image').hide(); //hide loading image
					loading = false;

				});

			}
		}
	});
});
