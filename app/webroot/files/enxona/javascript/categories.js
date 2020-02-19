var url = "http://localhost/";

$(document).ready(function() {

    get_categories();
    get_description();


});

function get_categories(){
    $.ajax({
        url     : url+"api/bi_categories_getall",
        type    : "get",
        success : (function (data) {
            $.each( data, function( key, value) {
                $("#category").append("<option  value='"+value.BusinessCategories.id+"'>"+value.BusinessCategories.name+"</option>");
                $("#categories .list").append("<li data-value='"+value.BusinessCategories.name+"' class='option'>"+value.BusinessCategories.name+"</li>");
            });
        }),
    });

}

function get_description(){
    $.ajax({
        url     : url+"api/bi_description_getall",
        type    : "get",
        success : (function (data) {
            $.each( data, function( key, value) {

<div class="listing-carousel  fl-wrap ">
					
					<div class="slick-slide-item">
						
						<div class="listing-item">
							<article class="geodir-category-listing fl-wrap">
								<div class="geodir-category-img">
									<img src="<files/themes/enxona/images/all/1.jpg" alt="">
									<div class="overlay"></div>
									<div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
								</div>
								<div class="geodir-category-content fl-wrap">
									<a class="listing-geodir-category" href="web/listing">Retail</a>
									<div class="listing-avatar"><a href="author-single.html"><img src="files/themes/enxona/images/avatar/5.jpg" alt=""></a>
										<span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
									</div>
									<h3><a href="/web/listing_single">Event in City Mol</a></h3>
									<p>Sed interdum metus at nisi tempor laoreet.  </p>
									<div class="geodir-category-options fl-wrap">
										<div class="listing-rating card-popup-rainingvis" data-starrating2="5">
											<span>(7 reviews)</span>
										</div>
										<div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
									</div>
								</div>
							</article>
						</div>
						                      
					</div>

                $("#cdescription").append(description);
            });
        }),
    });

}

