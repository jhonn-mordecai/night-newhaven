var url = document.URL;

$(document).ready(function(){
	
	//Handle the Ready For Submit checkbox/enable Playlist submit button
	$('input#ready-submit').on('change', function(){

		var check_icon = $(this).next();

		if ( this.checked ) {
			$('button.submit-playlist').attr("disabled", false);
			check_icon.removeClass('fa-square-o').addClass('fa-check-square');
		} else {
			$('button.submit-playlist').attr("disabled", true);
			check_icon.removeClass('fa-check-square').addClass('fa-square-o');
		}
	});

	///////////////////////////////////////////////
	// Show playlist when selecting a date
	///////////////////////////////////////////////
	$('div.selector select').on('change', function(){

		var date = $('div.selector select').val();
		var written_date = $('div.selector select option:selected').text();

		//Centered Text in Select Menu
		$('.select-span').html(written_date);

		if (date == 'empty') {return false;}

		$.ajax({
			type:"POST",
			url: url+"/ajax.php",
			dataType: "json",
			data: {
				action:'select_playlist_date',
				date: date
			},
			error: function(msg) {
				return false;
			},
			success: function(msg) {

				var playlist_html = msg.playlist_html;

				$('div.playlist ul').html(playlist_html);
				$('p.bottom-moon').hide();
				$('div.playlist').slideDown('slow');
				$('html,body').animate({
					scrollTop: $('div.selector').offset().top
				});
				
				return true;
			}
		});
	});

	$('div.selector select').on('change', function(){

		if ($(this).val() == 'empty') {
			
			$('div.playlist').slideUp('slow');
			$('option:selected').prop('selected', false);
			$('.select-span').html("Choose Date");
			$('p.bottom-moon').show();
		}
	});

	$('button.close-list').on('click', function(){
		
		$('div.playlist').slideUp('slow');
		$('option:selected').prop('selected', false);
		$('.select-span').html("Choose Date");
		$('p.bottom-moon').show();
	});
	

	///////////////////////////////////////////////
	// Search Playlist form
	///////////////////////////////////////////////

	$('.playlist-search-button').on('click', function(){

		var search_item = $('input[name=item-search]').val();
		
		$.ajax({
			type:"POST",
			url: "ajax.php",
			dataType: "json",
			data: {
				action:'search_playlist',
				search_item: search_item
			},
			error: function(msg) {
				
				return false;
			},
			success: function(msg) {
				
				var search_results = msg.search_results_html;
				var result_count = msg.result_count;
				$('div.playlist-search-results').html(search_results);
				$('div.playlist-search-results').prepend(`<p class="result-count">RESULTS: ${result_count}</p><hr>`);
				$('div.playlist-search-results').slideDown();
				$('html,body').animate({
					scrollTop: $('div.playlist-search-results').offset().top
				});
				return true;
			}
		});
	});

	$('button.clear-search-field').on('click', function(){
		
		$('div.playlist-search-results').slideUp();
		$('p.result-count').remove();
		$('input[name=item-search]').val('');
	});


	///////////////////////////////////////////////////
	// Animate NIGHT logo color from silver to black
	//////////////////////////////////////////////////

	$(window).scroll(function(){

		var svg = $('svg g');
		var scroll_trigger = $(window).scrollTop();

		if (scroll_trigger > 165) {
			svg.find('.logo-silver').removeClass('logo-silver').addClass('logo-black');
		} else {
			svg.find('.logo-black').removeClass('logo-black').addClass('logo-silver');
		}
	});
	
	
	///////////////////////////////////////////////////
	// Live page - put video caption in Caption box
	//////////////////////////////////////////////////

	$('.previous-event a').on('click', function(){
		
		let video_caption = $(this).data('caption');
		$('div.caption').html(video_caption);
	});
	
	
});



