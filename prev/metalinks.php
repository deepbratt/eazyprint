
<link rel="shortcut icon" href="images/favicon.png">

<script src="js/jquery-2.2.4.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/layers.css">
<link rel="stylesheet" type="text/css" href="css/navigation.css">


<link rel="stylesheet" href="css/core-style.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/boostrap/bootstrap.min.css">


<link href="css/responsive.css" rel="stylesheet">

<link href="css/opensans.css" rel="stylesheet">


<script type="text/javascript" src="js/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution.extension.navigation.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<style>
	body{
		background:#f5f5f5;
	}
	.pad0{
		padding:0px;
		margin:0px;
	}
	.shp_cart{
		height:40px;background:rgb(42, 43, 46);width:40px;border-radius:50%;
		margin-left:2px;text-align:center;
	}
	.shp_cart:hover{
		cursor:pointer;
		background:#dd0017;
	}

h2{
text-align:center;
padding: 20px;
}
/* Slider */

.slick-slide {
margin: 0px 20px;
}

.slick-slide img {
width: 100%;
}

.slick-slider
{
position: relative;
display: block;
box-sizing: border-box;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
		user-select: none;
-webkit-touch-callout: none;
-khtml-user-select: none;
-ms-touch-action: pan-y;
	touch-action: pan-y;
-webkit-tap-highlight-color: transparent;
}

.slick-list
{
position: relative;
display: block;
overflow: hidden;
margin: 0;
padding: 0;
}
.slick-list:focus
{
outline: none;
}
.slick-list.dragging
{
cursor: pointer;
cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
-webkit-transform: translate3d(0, 0, 0);
   -moz-transform: translate3d(0, 0, 0);
	-ms-transform: translate3d(0, 0, 0);
	 -o-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
}

.slick-track
{
position: relative;
top: 0;
left: 0;
display: block;
}
.slick-track:before,
.slick-track:after
{
display: table;
content: '';
}
.slick-track:after
{
clear: both;
}
.slick-loading .slick-track
{
visibility: hidden;
}

.slick-slide
{
display: none;
float: left;
height: 100%;
min-height: 1px;
}
[dir='rtl'] .slick-slide
{
float: right;
}
.slick-slide img
{
display: block;
}
.slick-slide.slick-loading img
{
display: none;
}
.slick-slide.dragging img
{
pointer-events: none;
}
.slick-initialized .slick-slide
{
display: block;
}
.slick-loading .slick-slide
{
visibility: hidden;
}
.slick-vertical .slick-slide
{
display: block;
height: auto;
border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
	display: none;
}

.btn_cart:hover > .fa-shopping-cart{
	color:#a0a0a0 !important;
}
.btn_wish:hover > .fa-gratipay{
	color:#ff3300 !important;
}
.btn_diy:hover > .fa-edit{
	color:#33cc00 !important;
}

.pad0{
			padding:0px;
			margin:0px;
		}
		.shp_cart{
			height:40px;background:rgb(42, 43, 46);width:40px;border-radius:50%;
			margin-left:2px;text-align:center;
		}
		.shp_cart:hover{
			cursor:pointer;
			background:#dd0017;
		}
		.timeline {
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
}

    .timeline:before {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        left: 50%;
        margin-left: -1.5px;
    }

    .timeline > li {
        margin-bottom: 20px;
        position: relative;
    }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li > .timeline-panel {
            width: 46%;
            float: left;
            border: 1px solid #d4d4d4;
            border-radius: 2px;
            padding: 20px;
            position: relative;
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        }

            .timeline > li > .timeline-panel:before {
                position: absolute;
                top: 26px;
                right: -15px;
                display: inline-block;
                border-top: 15px solid transparent;
                border-left: 15px solid #ccc;
                border-right: 0 solid #ccc;
                border-bottom: 15px solid transparent;
                content: " ";
            }

            .timeline > li > .timeline-panel:after {
                position: absolute;
                top: 27px;
                right: -14px;
                display: inline-block;
                border-top: 14px solid transparent;
                border-left: 14px solid #f5f5f5;
                border-right: 0 solid #f5f5f5;
                border-bottom: 14px solid transparent;
                content: " ";
            }

        .timeline > li > .timeline-badge {
            color: #fff;
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 1.4em;
            text-align: center;
            position: absolute;
            top: 16px;
            left: 50%;
            margin-left: -25px;
            background-color: #999999;
            z-index: 100;
            border-top-right-radius: 50%;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            border-bottom-left-radius: 50%;
        }

        .timeline > li.timeline-inverted > .timeline-panel {
            float: right;
        }

            .timeline > li.timeline-inverted > .timeline-panel:before {
                border-left-width: 0;
                border-right-width: 15px;
                left: -15px;
                right: auto;
            }

            .timeline > li.timeline-inverted > .timeline-panel:after {
                border-left-width: 0;
                border-right-width: 14px;
                left: -14px;
                right: auto;
            }

			.timeline-badge.primary {
				background-color: #2e6da4 !important;
			}

			.timeline-badge.success {
				background-color: #3f903f !important;
			}

			.timeline-badge.warning {
				background-color: #f0ad4e !important;
			}

			.timeline-badge.danger {
				background-color: #d9534f !important;
			}

			.timeline-badge.info {
				background-color: #5bc0de !important;
			}

			.timeline-title {
				margin-top: 0;
				color: inherit;
			}

			.timeline-body > p,
			.timeline-body > ul {
				margin-bottom: 0;
			}

				.timeline-body > p + p {
					margin-top: 5px;
				}

			@media (max-width: 767px) {
				ul.timeline:before {
					left: 40px;
				}

				ul.timeline > li > .timeline-panel {
					width: calc(100% - 90px);
					width: -moz-calc(100% - 90px);
					width: -webkit-calc(100% - 90px);
				}

				ul.timeline > li > .timeline-badge {
					left: 15px;
					margin-left: 0;
					top: 16px;
				}

				ul.timeline > li > .timeline-panel {
					float: right;
				}

					ul.timeline > li > .timeline-panel:before {
						border-left-width: 0;
						border-right-width: 15px;
						left: -15px;
						right: auto;
					}

					ul.timeline > li > .timeline-panel:after {
						border-left-width: 0;
						border-right-width: 14px;
						left: -14px;
						right: auto;
					}
			}
</style>