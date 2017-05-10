$(document).ready(function() {

	/* Initialize popovers */
	$(function () {
	  $('[data-toggle="popover"]').popover();
	});

	/* Initialize tooltips */
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip();
	});

	/* Modal autofocus */
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	});


    /* Carousel interval / don't pause on mouseover */

    $('.carousel').carousel({
		interval: 5000,
		pause: "false"
	});


	/* Dropdown menus in mobile - toggle on click rather than on hover */

	$('.navbar-toggle').on('click', function(){

		$('.nav .dropdown').toggleClass('dropdown-hover');
	});


	/* Dropdown menus in tablet - toggle on click */
	
    if ( ($('.navbar-toggle').css( "position" )) == "absolute" ) {
        
        $('.nav .dropdown').toggleClass('dropdown-hover');
		$('.nav .dropdown > a').attr('data-toggle', 'dropdown');
    };


    /* Mobile dropdown - use caret to drop down instead of actual link */
	
    if ( ($('.caret').css( "margin-top" )) == "20px" ) {
        
        $('.dropdown .caret').each(function(i){

        	var parent = $(this).parent();
        	$(parent).removeAttr('data-toggle');
        	$(parent).removeAttr("aria-haspopup");
        	$(parent).removeAttr("aria-expanded");

        	$("<div class='caret-container'></div>").insertAfter(parent);

        	$(".caret-container").attr("aria-haspopup", "true");
        	$(".caret-container").attr("aria-expanded", "false");
        	$(".caret-container").attr("data-toggle", "dropdown")
        	
        	$(this).appendTo('.caret-container');

        	/* remove original duplicate */
        	if( i == 0 ){
        		$(this).remove();
        	};

        });
    };

    /* Flip dropdown caret when menu expands */
    $(".caret-container").on("click", function(){

    	$(".caret", this).toggleClass("caret-down");
    })



	/* Nav item active */

    var current_url = window.location.pathname.substr(window.location.pathname.lastIndexOf("/")+1);

    $("nav ul li a").each(function(){

        if( $(this).attr("href") == current_url ){
    		$(this).parent().addClass("active");
    	}
    });

    $("li.dropdown").has("li.active").addClass("active");



	
	/* Image box nav item hover effects */

	$('.box-outer-zoom').hover(
		function() {

	    	var $image = $(this).css('background-image');

			if( $('.box-caption-header', this).hasClass('primary') ) {

	    		var $overlay_image = 'linear-gradient(rgba(0, 200, 223, 0.5), rgba(0, 200, 223, 0.5)),' + $image;

	    	}
			else {

	    		var $overlay_image = 'linear-gradient(rgba(255, 112, 143, 0.5), rgba(255, 112, 143, 0.5)),' + $image;

	    	}

	    	$(this).css('background', $overlay_image);

	    	$(this).attr('data-src', $image);

		},
		function() {

			var $image = $(this).attr('data-src');

			$(this).css('background-image', $image);

			$(this).attr('data-src', '');

		}
	);



	/* MixItUp interfering with Bootstrap Modal fix */

	if(  $(".mix-controls button.active").attr("data-filter") == ".scoop"  ) {

		mixer.toggleOn('.scoop');
	}
	else if(  $(".mix-controls button.active").attr("data-filter") == ".sip"  ) {

		mixer.toggleOn('.sip');
	}



	/* Mobile product popovers - replacement for modals */

	if(  $(".product-img").css("height") == "250px"  ) {

		$(".thumbnail.product").attr("data-toggle", "popover");
		$(".thumbnail.product").attr("data-container", "body");
		$(".thumbnail.product").attr("data-placement", "bottom");

	}



	/* Process form submissions - contact form and club signup */

	$('form.contact-club').on('submit', function(e){

		e.preventDefault();

		var form = $(this);

		var post_url = form.attr('action');

	    var post_data = form.serialize();

	    $.ajax({
	        type: 'POST',
	        url: post_url,
	        data: post_data,
	        success: function(msg) {

	        	$(form).append("<div class='msg-check' style='display:none;'>" + msg + "</div>");

	        	if(  $(".msg-check .alert").hasClass("alert-success")  ) {

	        		$(form).fadeOut(500, function(){

		                form.html(msg).fadeIn();
		            });
	        	}

	        	else if(  $(".msg-check .alert").hasClass("alert-danger")  ){

	        		$(form).prepend(msg);
	        	}



	            /*$(form).fadeOut(500, function(){

	                form.html(msg).fadeIn();
	            });*/

	        }
	    });

	});



	/* Month and Day dropdown - Hide day numbers based on month selected */

	function month_hide(month){

		if(month == '02'){

			$('select#day option').slice(30).attr('disabled', '');
		}

		else if (month == '04' || month == '06' || month == '09' || month == '11'){

			$('select#day option[value="31"]').attr('disabled', '');
		}
	}

	$('select#month').change(function(){

		$('select#day option').removeAttr('disabled');

		if( $('select#day option:selected').attr('disabled') ){

			$('select#day').val('');
		}


		var month = $('option:selected', this).val();

		month_hide(month);

	});



	/* Fade in when scrolled to */

	$(window).scroll( function(){
    
    	/* Fade in one-by-one */

        $('.show-sequence').each( function(i){
            
            var object_bottom = $(this).offset().top + $(this).outerHeight();
            var window_bottom = $(window).scrollTop() + $(window).height();

            var show_delay = 250*i;
            

            if( window_bottom > object_bottom ){
                
                $(this).delay(show_delay).animate({'opacity':'1'},300);
                    
            }
            
        });


        /* Fade in all at once */

        $('.show-together').each( function(){
            
            var object_bottom = $(this).offset().top + $(this).outerHeight();
            var window_bottom = $(window).scrollTop() + $(window).height();
            

            if( window_bottom > object_bottom ){
                
                $(this).animate({'opacity':'1'},300);
                    
            }
            
        });
  
    });


	/* Slide down into position when scrolled to */

	$(window).scroll( function(){
    
        $('.slide-down').each( function(i){
            
            var object_bottom = $(this).offset().top + $(this).outerHeight();
            var window_bottom = $(window).scrollTop() + $(window).height();
            
            if( window_bottom > object_bottom ){
                
                $(this).animate({

                	'margin-top':'0',
                	'opacity': '1'

                },500);
                    
            }
            
        });
  
    });


	/* Raise hovered product, blur the others */

	if( !$('.thumbnail.product').closest("#product-area").length ){



	    $('.thumbnail.product').hover(function(){

	    	$(this).addClass('hovered');

	    	$('.thumbnail.product').not('.hovered').each(function(){

	    		$('.product-img',this).addClass('blurred');
	    	});
	    },
	    function(){

	    	$(this).removeClass('hovered');

	    	$('.thumbnail.product').not('.hovered').each(function(){

	    		$('.product-img',this).removeClass('blurred');
	    	});

	    });



	};





    /************************ New stuff for project 2 *******************************/



    /* NoUI Sliders */

    if( document.getElementById('inventory-slider') ) {

	    var inventory_slider = document.getElementById('inventory-slider');


	    var start_max;

	    $.ajax({

			type: "GET",
			url: "includes/update_inventory_slider.php",
			async: false,
			beforeSend: function(){
				$('#inventory-upper').append("<img src='img/spinner.gif' alt='Loading'>");
			},
			complete: function(){
				$('#inventory-upper img').remove();
			},
			success: function(data){
				
				start_max = Number(data);

				//console.log("AJAX success - " + typeof(start_max) + " " + data );

				console.log("Synchronous request made in scripts.js line 354.");
				console.log("The largest inventory value in the database is fetched before the inventory slider object is created.");
			},
			fail: function(){
				
				start_max = 100;
			},
			timeout: 5000
		});


	    //console.log (start_max + " " + typeof(start_max));

	    noUiSlider.create(inventory_slider, {
			start: [ 0, start_max ],
			behaviour: 'drag-tap',
			step: 1,
			connect: true,
			tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
			range: {
				'min':  0,
				'max':  start_max
			}
		});

		updateSlider();


		/*var price_slider = document.getElementById('price-slider');

	    noUiSlider.create(price_slider, {
			start: [ 0, 20 ],
			behaviour: 'drag-tap',
			step: 1,
			connect: true,
			tooltips: [ wNumb({ decimals: 2, prefix: '$ ' }), wNumb({ decimals: 2, prefix: '$ ' }) ],
			range: {
				'min':  0,
				'max':  20
			}
		});*/


		var DecimalFormat = wNumb({

			decimals: 0
		});

		var MoneyFormat = wNumb({

			prefix: '$ ',
			decimals: 2
		});


		var inventory_values = [
			document.getElementById('inventory-lower'),
			document.getElementById('inventory-upper')
		];

		inventory_slider.noUiSlider.on('update', function( values, handle ) {
			inventory_values[handle].innerHTML = DecimalFormat.from( values[handle] );
		});


		/*var price_values = [
			document.getElementById('price-lower'),
			document.getElementById('price-upper')
		];

		price_slider.noUiSlider.on('update', function( values, handle ) {
			price_values[handle].innerHTML = MoneyFormat.to( values[handle] );
		});*/


	};

	$('.noUi-handle').on('mousedown', function(){

		$('.noUi-tooltip', this).css('display', 'block');
	});
	$(document).on('mouseup', function(){

		$('.noUi-tooltip', this).css('display', 'none');
	});


	function updateSlider(){

		var max;

		$.ajax({

			type: "GET",
			url: "includes/update_inventory_slider.php",
			beforeSend: function(){
				$('#inventory-upper').append("<img src='img/spinner.gif' alt='Loading'>");
			},
			complete: function(){
				$('#inventory-upper img').remove();
			},
			success: function(data){

				//console.log("update slider, max inventory value: " + data);

				max = Number(data);
				
				inventory_slider.noUiSlider.updateOptions({
					range: {
						'min': 0,
						'max': max
					}
				});



			},
			fail: function(){
				$('#inventory-upper').html('100');
			},
			timeout: 5000
		});

	}



	/* Hide add-new-product form */

	$('#add-new-product').hide();

	$('#add-new-btn').on('click', function(){

		$('#add-new-product').slideToggle();

		$(this).hide();
	});

	$('#form-cancel').on('click', function(){

		$('#add-new-product').slideToggle();

		$('#add-new-btn').show();
	});


	/* Select new product category */

	$('#category').change(function(){

		var category = $('option:selected', this).val();

		$('#sub-category').attr('disabled', false);

		$('#sub-category option:selected').prop('selected', false);
		$('#sub-category option[hidden]').prop('selected', true);

		if(category == 'Scoops'){

			$('#sub-category optgroup[label="Sips"]').hide();
			$('#sub-category optgroup[label="Scoops"]').show();

		}
		else if(category == 'Sips'){

			$('#sub-category optgroup[label="Sips"]').show();
			$('#sub-category optgroup[label="Scoops"]').hide();

		}

	});



	/* Initial products load */

	var products_loading = '<div class="progress" id="products-loading"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">Loading</span></div></div>';

	function showAllProducts(){

		$.ajax({

			type: "GET",
			url: "includes/get_products.php",
			beforeSend: function(){
				$('#product-area').prepend(products_loading);
			},
			complete: function(){
				$('#products-loading').fadeOut(300, function(){
					$('#products-loading').remove();
				});
			},
			success: function(data){

				$('#product-area').fadeOut(300, function(){

					$('#product-area').empty();
					$('#product-area').append(data);
				});

				$('#product-area').fadeIn(300);
			},
			fail: function(){
				$('#product-area').html('Products failed to load. Please try refreshing the page.');
			},
			timeout: 5000
		});
	}

	showAllProducts();



	/* Filter products */

	function filterProducts(){

		// Selected Categories
		var data_categories = "";

		$('input[name="filter-category"]:checked').each(function(){

			data_categories += "'" + $(this).val() + "', ";
		});

		data_categories = data_categories.substring(0, data_categories.length-2);


		// Inventory Range
		var data_inventory_lower = Number( $('#inventory-lower').text() );
		var data_inventory_upper = Number( $('#inventory-upper').text() );


		//Sorting
		var data_sorting = $('#product-sorting option:selected').val();

		
		//Search
		var data_search = $('#searchProduct input').val();


		if( $('input[name="filter-category"]:checked').length == 0 ) {

			data_categories = "'Ice Cream', 'Froyo', 'Sorbet', 'Shakes', 'Smoothies', 'Frappes'";
		}


		$.ajax({
			type: "GET",
			data: {categories: data_categories, inventory_lower: data_inventory_lower, inventory_upper: data_inventory_upper, sorting: data_sorting, search: data_search},
			url: "includes/filter_products.php",
			beforeSend: function(){
				$('#product-area').prepend(products_loading);
			},
			complete: function(){
				$('#products-loading').fadeOut(300, function(){
					$('#products-loading').remove();
				});	
			},
			success: function(data){
				
				$('#product-area').fadeOut(300, function(){

					$('#product-area').empty();
					$('#product-area').append(data);
				});

				/*$('#product-area').empty();
				$('#product-area').append(data);*/

				$('#product-area').fadeIn(300);

				updateInventoryChip();
			},
			fail: function(){
				$('#product-area').html('Products failed to load. Please try refreshing the page.');
			},
			timeout: 5000
		});
	

	};


	/* Change selected categories */

	$('input[name="filter-category"]').change(function(){

		if( !$(this).is(':checked') ){

			$('#filter-chips-inner .chip:contains("' + $(this).val() + '")').remove();

			$(this).closest('label').removeClass('checked-box');
		}

		else{
			$('#filter-chips-inner').append('<div class="chip">' + $(this).val() + ' <span class="chip-close">&times;</span></div>');

			$(this).closest('label').addClass('checked-box');
		}


		filterProducts();

	});

	$('#filter-chips').on('click', '.chip-close', function(){

		var chip = $(this).closest('.chip');

		var category = $(chip).text();
		category = category.substring(0, category.length-2);


		$('input[name="filter-category"]').each(function(){

			var checkbox_category = $(this).val();


			if( checkbox_category == category ){

				$(this).prop('checked', false);

				$(this).closest('label').removeClass('checked-box');
			}
		});


		$(chip).fadeOut(200, function(){
				$(this).remove();
			});

		filterProducts();

	});




	/* Adjust inventory slider */

	inventory_slider.noUiSlider.on('end', function(){
		
		filterProducts();

		//updateInventoryChip();

		//$('#inventory-chip').text( $('#inventory-lower').text() + " - " + $('#inventory-upper').text() );
	});


	function updateInventoryChip(){

		$('#inventory-chip').text( $('#inventory-lower').text() + " - " + $('#inventory-upper').text() );
	}

	updateInventoryChip();

	


	/* Adjust sorting */

	$('select#product-sorting').change(function(){

		filterProducts();

	});



	/* Search */

	$('#searchProduct button').on('click', function(){

		filterProducts();
		
	});
	$('#searchProduct').on('submit', function(e){

		e.preventDefault();

		filterProducts();
		
	});



	/* Add Product */

	$('form#add-new-product').on('submit', function(e){

		e.preventDefault();

		var form = $(this);

		var valid = true;


		/* Check if categories were selected */

		$('select option:selected', form).each(function(){

			if( $(this).val() == "default" ){

				$('.alert-danger').remove();

				$(form).before("<div class='alert alert-danger' id='add-fail' role='alert'><strong>Error.</strong> Please select a category and sub-category.</div>");

				valid = false;
			}
		})


		if(!valid){
			return false;
		}


		var add_data = $(this).serialize();

		$.ajax({
			type: "POST",
			data: add_data,
			url: "includes/add_new_product.php",
			beforeSend: function(){
				$('#add-new-product').append(products_loading);
			},
			complete: function(){
				$('#products-loading').fadeOut(300, function(){
					$('#products-loading').remove();
				});
			},
			success: function(data){

				$('.alert-danger').remove();

				$(form).before(data);

				if( $('#add-result').hasClass('alert-success') ){

					$(form).slideToggle();

					$('#add-new-btn').show();


					$('input', form).val('');
					$('textarea', form).val('');

					$('select option:selected', form).prop('selected', false);
					$('select option[hidden]', form).prop('selected', true);


					$('.alert').delay(3000).fadeOut(300, function(){
						$(this).remove();
					});

					updateSlider();

					filterProducts();

				}

			},
			fail: function(){
				$('form#add-new-product').html('The product could not be added. Please try again.');
			},
			timeout: 5000
		});

		

		

	});



	/* Delete Product */

	$('#product-area').on('mouseenter', '.product.thumbnail:not(".delete-active")', function(){

		$('.caption.delete', this).fadeIn(200);
	});

	$('#product-area').on('mouseleave', '.product.thumbnail', function(){

		$('.caption.delete', this).fadeOut(200);
	});



	/*$('#product-area').on('click', '.caption.delete', function(){
		
		var product_id = $(this).attr('data-product-id');

		$.ajax({
			type: "POST",
			data: {id: product_id},
			url: "includes/delete_product.php",
			beforeSend: function(){
				$('#product-area').prepend(products_loading);
			},
			complete: function(){
				$('#products-loading').remove();
			},
			success: function(data){
				
				$('#product-area').before(data);

				updateSlider();

				filterProducts();

				$('.alert').delay(3000).fadeOut(300, function(){
					$(this).remove();
				});

			},
			fail: function(){
				
				$('#product-area').before("<div class='alert alert-danger' id='add-fail' role='alert'><strong>Error.</strong> The product could not be deleted. Please try again.</div>");

			},
			timeout: 5000
		});

		
	});*/



	$('#product-area').on('click', '.caption.delete', function(){

		// Remove previous delete box if one is already active
		$('.delete-active .product-alert').remove();

		$('.delete-active').removeClass('delete-active');


		var product_id = $(this).attr('data-product-id');

		var product = $(this).parent();

		var product_name = $('.caption h4', product).text();

		$(product).append('<div class="product-alert"><div><p>Permanently delete <br> <strong>' + product_name + '</strong>?</p><button type="button" class="btn btn-danger">Delete</button><button type="button" class="btn btn-default">Cancel</button></div></div>');

		$(product).addClass('delete-active');

		$('.caption.delete', product).fadeOut(200);


		// Delete

		$('.product-alert .btn-danger', product).on('click', function(){

			
			$.ajax({
				type: "POST",
				data: {id: product_id},
				url: "includes/delete_product.php",
				beforeSend: function(){
					//$('#product-area').prepend(products_loading);

					$('.product-alert > div', product).append(products_loading);
				},
				complete: function(){
					$('#products-loading').fadeOut(300, function(){
						$('#products-loading').remove();
					});
				},
				success: function(data){
					
					$('#product-area').before(data);

					updateSlider();

					filterProducts();

					$('.alert').delay(3000).fadeOut(300, function(){
						$(this).remove();
					});

				},
				fail: function(){
					
					$('#product-area').before("<div class='alert alert-danger' id='add-fail' role='alert'><strong>Error.</strong> The product could not be deleted. Please try again.</div>");

				},
				timeout: 5000
			});


			$('.product-alert', product).remove();

			$(product).removeClass('delete-active');

		});


		// Cancel Delete

		$('.product-alert .btn-default', product).on('click', function(){

			$('.product-alert', product).remove();

			$(product).removeClass('delete-active');
		});


	});



	




});