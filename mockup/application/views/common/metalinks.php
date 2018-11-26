<link href="<?php echo base_url();?>css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
<link href="<?php echo base_url();?>css/dashboard.css" rel="stylesheet" />
<link href="<?php echo base_url();?>css/jqvmap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/jquery.mCustomScrollbar.css" rel="stylesheet" />
<link href="<?php echo base_url();?>css/sidemenu.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/c3-chart.css" rel="stylesheet" />
<link href="<?php echo base_url();?>css/morris.css" rel="stylesheet" />
<link href="<?php echo base_url();?>css/plugin.css" rel="stylesheet" />
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" />
<link href="<?php echo base_url();?>css/addSlider.css" rel="stylesheet" />
<style>
	@font-face {
		font-family: samarkan1;
		src: url(<?php echo base_url('fonts/');?>SAMARN__.TTF);
	}
	@font-face {
		font-family: samarkan2;
		src: url(<?php echo base_url('fonts/');?>SAMARO__.TTF);
	}
	body{
		background:#fff !important;
	}
	.sticky {
	  position: fixed;
	  top: 0;
	  width: 100%;
	  z-index:9999;
	}

	.sticky + .container {
	  padding-top: 102px;
	}

	/* IMAGES SLIDER IN PRODUCT DETAILS*/
		/*TOP SLIDER STARTS*/
			.product-info .product-gallery {
			  display: flex;
			  flex-direction: row;
			  border-bottom: 1px solid rgba(0,0,0,.125);
			}

			.product-gallery-featured {
			  display: flex;
			  width: 100%;
			  flex-direction: row;
			  justify-content: center;
			  align-items: flex-start;
			  padding: 15px 0;
			  cursor: zoom-in;
			}

			.product-gallery-thumbnails .thumbnails-list li {
			  margin-bottom: 5px;
			  cursor: pointer;
			  position: relative;
			  width: 70px;
			  height: 70px;
			}

			.thumbnails-list li img {
			  display: block;
			  width: 100%;
			}

			.product-gallery-thumbnails .thumbnails-list li:hover::before {
			  content: "";
			  width: 3px;
			  height: 100%;
			  background: #007bff;
			  position: absolute;
			  top: 0;
			  left: 0;
			}
		/*TOP SLIDER ENDS*/
			@media (min-width: 768px) {

		    /* show 3 items */
		    .carousel-inner .active,
		    .carousel-inner .active + .carousel-item,
		    .carousel-inner .active + .carousel-item + .carousel-item,
		    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
		        display: block;
		    }
		    
		    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
		    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
		    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
		    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
		        transition: none;
		    }
		    
		    .carousel-inner .carousel-item-next,
		    .carousel-inner .carousel-item-prev {
		      position: relative;
		      transform: translate3d(0, 0, 0);
		    }
		    
		    .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
		        position: absolute;
		        top: 0;
		        right: -25%;
		        z-index: -1;
		        display: block;
		        visibility: visible;
		    }
		    
		    /* left or forward direction */
		    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
		    .carousel-item-next.carousel-item-left + .carousel-item,
		    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
		    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
		    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
		        position: relative;
		        transform: translate3d(-100%, 0, 0);
		        visibility: visible;
		    }
		    
		    /* farthest right hidden item must be abso position for animations */
		    .carousel-inner .carousel-item-prev.carousel-item-right {
		        position: absolute;
		        top: 0;
		        left: 0;
		        z-index: -1;
		        display: block;
		        visibility: visible;
		    }
		    
		    /* right or prev direction */
		    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
		    .carousel-item-prev.carousel-item-right + .carousel-item,
		    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
		    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
		    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
		        position: relative;
		        transform: translate3d(100%, 0, 0);
		        visibility: visible;
		        display: block;
		        visibility: visible;
		    }

		}

		 /* Bootstrap Lightbox using Modal */

		#profile-grid { overflow: auto; white-space: normal; } 
		#profile-grid .profile { padding-bottom: 40px; }
		#profile-grid .panel { padding: 0 }
		#profile-grid .panel-body { padding: 15px }
		#profile-grid .profile-name { font-weight: bold; }
		#profile-grid .thumbnail {margin-bottom:6px;}
		#profile-grid .panel-thumbnail { overflow: hidden; }
		#profile-grid .img-rounded { border-radius: 4px 4px 0 0;}
	/* IMAGE SLIDER FOR PRODUCT DETAILS PAGE*/
	/* ACCORDIONS STARTS*/
		.accordion {
		    background-color: #eee;
		    color: #444;
		    cursor: pointer;
		    padding: 18px;
		    width: 100%;
		    border: none;
		    text-align: left;
		    outline: none;
		    font-size: 15px;
		    transition: 0.4s;
		}

		.accordion_active, .accordion_active:hover {
		    background-color: #ccc;
		}

		.accordion:after {
		    content: '\002B';
		    color: #777;
		    font-weight: bold;
		    float: right;
		    margin-left: 5px;
		}

		.accordion_active:after {
		    content: "\2212";
		}

		.accordion_panel {
		    padding: 0 18px;
		    background-color: white;
		    max-height: 0;
		    overflow: hidden;
		    transition: max-height 0.2s ease-out;
		}
	/* ACCORDIONS ENDS*/
	</style>