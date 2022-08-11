$(function(){

	"use strict";
	jQuery(document).ready(function($) {

		// Hotel Search Page Finest Slider
		$('.finest-owl-slider').owlCarousel({
			items:4,
			margin:20,
			loop:true,
		    autoplay: true,
		    autoplayTimeout: 8000,
		    nav: true,
		    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:2
		        },
		        1000:{
		            items:4
		        }
		    }
		});


		// Hotel Search Page Testimonial Slider
		$('.testimonial-owl-slider').owlCarousel({
			items:1,
			margin:20,
			loop:true,
			dots: true,
		    autoplay: true,
		    autoplayTimeout: 5000,
		    nav: false,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		});

		// Latest Photos Slider

		$('.latest-photos-slider').owlCarousel({
		    loop:true,
		    margin:0,
		    nav: true,
		    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:4
		        }
		    }
		});


		// Hotel Select Slider

		$('.loop').owlCarousel({
		    center: true,
		    items:2,
		    loop:true,
		    margin:10,
		    nav: true,
		    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:3
		        }
		    }
		});


		// Hotel Select Slider

		$('.hotel-owl-slider').owlCarousel({
		    loop:true,
		    margin:15,
		    dots: false,
		    nav: false,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:2
		        }
		    }
		});


		// $('.select-hotel-carosel').owlCarousel({
		//     loop:true,
		//     margin:10,
		//     center:true
		//     nav:true,
		//     responsive:{
		//         0:{
		//             items:1
		//         },
		//         600:{
		//             items:3
		//         },
		//         1000:{
		//             items:3
		//         }
		//     }
		// });


		// 19. Reset Password Show/Hide Toggle Button Functionality
        $(function () {
            $("#toggle_pass").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
               	var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                $("#txtPassword").attr("type", type);
            });
            $("#toggle_repass").click(function () {
                $(this).toggleClass("master-card-payment");
               	var type = $(this).hasClass("master-card-payment") ? "text" : "password";
                $("#retxtPassword").attr("type", type);
            });
        });


        // Payment Option for Master Card
        $(function () {
        	$(".master-card-payment").hide();
        	$("#master-card").click(function(){
			    $(".master-card-payment").show();
			});
			$("#strip-card").click(function(){
			    $(".master-card-payment").hide();
			});
        });


        // Date Picker
        $(function () {
        	//Datemask dd/mm/yyyy
		    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
		    //Datemask2 mm/dd/yyyy
		    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
		    //Money Euro
		    $('[data-mask]').inputmask()

		    //Date range picker
		    $('#reservationdate').datetimepicker({
		        format: 'L'
		    });
		    //Date range picker
		    $('#reservation').daterangepicker({
                "opens": "right",
                "drops": "up"
            })
		    //Date range picker with time picker
		    $('#reservationtime').daterangepicker({
		      timePicker: false,
		      timePickerIncrement: 30,
		      locale: {
		        format: 'MM/DD/YYYY'
		      }
		    })
		    //Date range as a button
		    $('#daterange-btn').daterangepicker(
		      {
		        ranges   : {
		          'Today'       : [moment(), moment()],
		          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
		          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
		          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
		          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
		          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		        },
		        startDate: moment().subtract(29, 'days'),
		        endDate  : moment()
		      },
		      function (start, end) {
		        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
		      }
		    )

		    //Timepicker
		    $('#timepicker').datetimepicker({
		      format: 'LT'
		    })
        });


	});
});


// Tooltip Activation in full website
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

