<script src="{{ asset('webassets/js/vendor/jquery-2.2.4.min.js')}}"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
				<script src="{{ asset('webassets/js/vendor/bootstrap.min.js')}}"></script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>



				<script src="{{ asset('webassets/js/easing.min.js')}}"></script>
				<script src="{{ asset('webassets/js/hoverIntent.js')}}"></script>
				<script src="{{ asset('webassets/js/superfish.min.js')}}"></script>
				<script src="{{ asset('webassets/js/jquery.ajaxchimp.min.js')}}"></script>
				<script src="{{ asset('webassets/js/jquery.magnific-popup.min.js')}}"></script>
				<script src="{{ asset('webassets/js/jquery.tabs.min.js')}}"></script>
				<script src="{{ asset('webassets/js/jquery.nice-select.min.js')}}"></script>
				<script src="{{ asset('webassets/js/owl.carousel.min.js')}}"></script>
				<script src="{{ asset('webassets/js/mail-script.js')}}"></script>
				<script src="{{ asset('webassets/js/main.js')}}"></script>


				<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
				<script>
					$('.filters ul li').click(function () {
						$('.filters ul li').removeClass('active');
						$(this).addClass('active');

						var data = $(this).attr('data-filter');
						$grid.isotope({
							filter: data,


						})
					});

					var $grid = $(".grid").isotope({
						itemSelector: ".all",

                        isOriginLeft: false,
						masonry: {
							columnWidth: ".all"
						}
					})
				</script>

				<script>
					$('.counter-count').each(function () {
						$(this).prop('Counter', 0).animate({
							Counter: $(this).text()
						}, {

							//chnage count up speed here
							duration: 4000,
							easing: 'swing',
							step: function (now) {
								$(this).text(Math.ceil(now));
							}
						});
					});
				</script>

	<script>

		$(function () {
			var $clientslider = $('#clientlogo');
			var clients = $clientslider.children().length;
			var clientwidth = (clients * 220);
			$clientslider.css('width', clientwidth);
			var rotating = true;
			var clientspeed = 1800;
			var seeclients = setInterval(rotateClients, clientspeed);
			$(document).on({
				mouseenter: function () {
					rotating = false;
				},
				mouseleave: function () {
					rotating = true;
				}
			}, '#ourclients');
			function rotateClients() {
				if (rotating != false) {
					var $first = $('#clientlogo li:first');
					$first.animate({
						'margin-left': '-220px'
					}, 2000, function () {
						$first.remove().css({
							'margin-left': '0px'
						});
						$('#clientlogo li:last').after($first);
					});
				}
			}

            var TheFrame;
$(document).on( "pagebeforehide", function( event, data ) {
    TheFrame = $(event.target).find("iframe");
    setTimeout(StopVideo, 500);
});
function StopVideo(){
    var vid  = TheFrame.prop("src");
    TheFrame.prop("src", "");
    TheFrame.prop("src", vid);
}
		});

	</script>
    @yield('scripts')

				</body>
	</html>
