
<!DOCTYPE html>
<html lang="en-US" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  <title> Car Rental - Self Drive Rent a Car Booking - Without Driver</title>

<link rel='stylesheet' id='renita_bootstrap.min-css' href='https://www.rentacarkerala.in/wp-content/themes/rentit/js/bootstrap/css/bootstrap.min.css?ver=6.2.2' type='text/css' media='all' />

<link rel='stylesheet' id='renita_font-awesome-css' href='https://www.rentacarkerala.in/wp-content/themes/rentit/js/fontawesome/css/font-awesome.min.css?ver=6.2.2' type='text/css' media='all' />

<link rel='stylesheet' id='renita_theme1-css' href='https://www.rentacarkerala.in/wp-content/themes/rentit/css/theme.css?ver=6.2.2' type='text/css' media='all' />



    <script type="text/javascript">
		
        var global_map_style = [];

    </script>
			<style type="text/css" id="wp-custom-css">
	
.page-section.breadcrumbs .page-header h1 {
    margin: 0;
    padding: 0;
    font-size: 40px;
    font-weight: 700;
}

.page-section.breadcrumbs {
    background-color: #f5f6f8;
    padding-top: 0;
    padding-bottom: 0;
    z-index: 1;
    text-align: center;
}

h5.caption-title-sub {
    display: none;
}
h3.block-title.alt {
    display: none;
}
.page-id-10517 .row.row-inputs {
    display: block;
}

.row.row-inputs {
    display: none;
}
.form-delivery {
    margin-bottom: 30px;
    display: none;
}
.reservation-now {
    padding-top: 30px;
    border-top: solid 1px #d3d3d3;
    display: none;
}

 
.thumbnail .rating {
 
    display: none;
}
.car-big-card.alt .car-details .price {
    padding: 0;
    background-color: #e60000;
}
.abooknow a {
    color: #fff;
    text-align: center;
    display: block;
    font-size: 30px;
    font-weight: 800;
}
.car-big-card .car-details .button {
  
    display: none;
}
.car-big-card .car-details .price {
 
    background-color: #e60000;
 
}
ul.contact-us li {
    border-bottom: 1px solid #efefef;
    padding: 6px 0;
    font-size: 18px;
    margin: 0px;
}
ul.contact-us li h5 {
    font-size: 19px;
}
.page-id-10336 .caption-text {
    display: none;
}
.woocommerce div.product {
    margin-bottom: 0;
    position: relative;
    height: 403px;
    padding: 12px;
}
.thumbnail-car-card .buttons .btn-theme {
    line-height: 1;
    font-weight: 900;
    height: 56px;
    padding: 20px;
}		</style>
		<style type="text/css" data-type="vc_custom-css">.product-list-item {
    width: 350px;
    float: left;
    margin: 10px;
}
.car-listing .thumbnail-car-card .media {
    float: left;
}
.caption {
    clear: both;
}
.car-listing .thumbnail-car-card + .thumbnail-car-card {
    margin-top: 10px;
}</style>
<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1539420641773{margin-top: 0px !important;}.vc_custom_1539419340518{margin-top: 0px !important;padding-top: 0px !important;}.vc_custom_1539420538964{padding-right: 20px !important;padding-left: 20px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>
<body data-rsssl=1 id="home"  class="page-template-default page page-id-11130 wp-embed-responsive wide theme-rentit woocommerce-no-js page-rent-a-car-in-calicut wpb-js-composer js-comp-ver-6.13.0 vc_responsive" >

<!-- WRAPPER -->

	<div class="content-area">
		<!-- BREADCRUMBS -->
		<!-- BREADCRUMBS -->
				<section class="page-section breadcrumbs text-right">
			<div class="container">
				<div class="page-header">
					<h1>Rent a Car </h1>
				</div>
                <a style="padding-left: 92%;" class="nav-link" href="{{ route('login') }}">Admin Login</a>
             
			</div>
		</section>
		<!-- /BREADCRUMBS -->
		
<br><br>








<section class="vc_section vc_custom_1539419340518"><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="woocommerce columns-3 ">
<div class="row  columns-3">





<html>
<head>
<title>Search Car</title>
</head>

<h2 ALIGN="CENTER"> Search Car</h2>

<form action="/list_cars" method="post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<input type = "hidden" name = "car_det_tbl_id"  id="car_det_tbl_ids" value = "{{request('id') }}">
<table border="0" align="center" style="   border-collapse: separate;
    border-spacing: 0 1em;">
<tbody>



<tr>
<td><label for="course">Picking Up Date: </label></td>
<td><input id="Arrival_Date" maxlength="50" name="Arrival_Date" type="date" required/></td>
</tr>

<tr>
<td><label for="branch">Dropping Off Date: </label></td>
<td><input id="Return_Date" maxlength="50" name="Return_Date" type="date" required /></td>
</tr>



<tr>
<td align="right"><input name="Submit" type="Submit" value="FIND CAR" /></td>
</tr>


</tbody>
</table>
@if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

</form>
</html>




<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>
</div>
  
                </div>
            </div>
                
</body>
</html>
