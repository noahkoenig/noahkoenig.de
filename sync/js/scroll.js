				$(function(reference) {
					$('a[href*="#"]:not([href="#"])').click(function(reference) {
						if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
							var target = $(this.hash);
							target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
							if (target.length) {
								$('html, body').animate({scrollTop: target.offset().top}, 500);
								return false;
							}
						}
					});
				});

				$(function(){
                    var $stickytop = $(".stickytop");
                    $stickytop.data("status", "hidden");
                    $(window).on("scroll", function(){
                        var $stickytop = $(".stickytop");
                        if (window.pageYOffset === 0 && $stickytop.data("status") !== "hidden") {
                            $stickytop.stop(true, true);
                            $stickytop.animate({opacity: 0.0}, 250);
                            $stickytop.data("status", "hidden");
                        } else if (window.pageYOffset > 0 && $stickytop.data("status") === "hidden") {
                            $stickytop.stop(true, true);
                            $stickytop.animate({opacity: 1.0}, 250);
                            $stickytop.data("status", "visible");
                        }
                    });
                });