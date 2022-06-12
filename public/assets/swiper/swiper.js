$(document).ready(function() {
	var swiperSlideshow = new Swiper(".mySwiper", {
		slidesPerView:1,
		spaceBetween:0,
		effect:"slide", 
		speed:700,
		loop:true,
		autoplay:{
		delay:5000,
		},
		on: {
		init: function () {
		  console.log('swiper initialized');
			//swiperSlideshow.slideNext();
		},
	  },
	});
	var swiperExplore = new Swiper(".exploreSwiper",{
		slidesPerView:3,
		spaceBetween:45,
		 navigation:{
			nextEl:".explore-button-next",
			prevEl:".explore-button-prev",
		},
		breakpoints:{
			300:{
			slidesPerView:2,spaceBetween:15,
		  },
		  481:{
			slidesPerView:2,spaceBetween:15,
		  },
		  640:{
			slidesPerView:2,
			spaceBetween:25,
		  },
		  768:{
			slidesPerView:3,
			spaceBetween:25,
		  },
		  1024:{
			slidesPerView:3,
			spaceBetween:35,
		  },
			1280:{
			slidesPerView:3,
			spaceBetween:45,
		  },
		},
	});
 	var swiperExploreTab = new Swiper(".exploreTabSwiper",{
		slidesPerView:6,
		spaceBetween:15,
		 navigation:{
			nextEl:".exploreTab-button-next",
			prevEl:".exploreTab-button-prev",
		},
		breakpoints:{
			300:{
			slidesPerView:2,spaceBetween:15,
		  },
		  481:{
			slidesPerView:2,spaceBetween:15,
		  },
		  640:{
			slidesPerView:3,
			spaceBetween:25,
		  },
		  768:{
			slidesPerView:4,
			spaceBetween:25,
		  },
		  1024:{
			slidesPerView:6,
			spaceBetween:5,
		  },
		1280:{
			slidesPerView:6,
			spaceBetween:10,
		  },
		1366:{
			slidesPerView:6,
			spaceBetween:15,
		  },	
		},
	});
 	var swiperNotificationTab = new Swiper(".notificationTabSwiper",{
		slidesPerView:5,
		spaceBetween:15,
		 navigation:{
			nextEl:".notificationTab-button-next",
			prevEl:".notificationTab-button-prev",
		},
		breakpoints:{
			300:{
			slidesPerView:2,spaceBetween:15,
		  },
		  481:{
			slidesPerView:2,spaceBetween:15,
		  },
		  640:{
			slidesPerView:3,
			spaceBetween:25,
		  },
		  768:{
			slidesPerView:4,
			spaceBetween:25,
		  },
		  1024:{
			slidesPerView:5,
			spaceBetween:5,
		  },
		1280:{
			slidesPerView:5,
			spaceBetween:10,
		  },
		1366:{
			slidesPerView:5,
			spaceBetween:15,
		  },	
		},
	});
 
}); 	 