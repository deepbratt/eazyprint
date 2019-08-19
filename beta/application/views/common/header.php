<style>
header .logo img {
	height:64px !important;
}

header .nav-user__login_it a::before {
    content: '\e90c';
    font-family: mobilemarketplace, sans-serif;
    font-size: 1.5rem;
    display: inline-block;
    font-weight: 400;
	position:absolute;
	
    
}
</style>
<header>
      <div class="container">
        <div class="menu-layer js-menu-layer">
        </div>
        <div class="menu-button js-menu-button">
          <div class="menu-icon">
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
          </div>
          <div>Menu
          </div>
        </div>
        <div class="menu-main js-menu-main">
          <nav class="main-links">
            <ul>
              <li>
                <h4>About Eazyprint
                </h4>
                <ul>
                  <li>
                    <a href="<?php echo base_url('home');?>">Home
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('how_it_works');?>">How it Works
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('contact');?>">Contact us
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <h4>New to Eazyprint
                </h4>
                <ul>
                  <li>
                    <a href="<?php echo base_url('pricing');?>">Pricing
                    </a>
                  </li>
                 
                </ul>
              </li>
            
              <li>
                <h4>Common Use Cases
                </h4>
                <ul>
                  <li>
                    <a href="<?php echo base_url('youtube_merch_maker');?>">YouTube Merchandise Maker
                    </a>
                  </li>
                  <!-- <li>
                    <a href="#">Merchandise Creator
                    </a>
                  </li>
                 -->
                  <li>
                    <a href="<?php echo base_url('sell_without_inv');?>">Sell Shirts Without Inventory
                    </a>
                  </li>
             
                </ul>
              </li>
            
            </ul>
          </nav>            
          <nav class="mobile-login">
            <a href="<?php echo base_url('register');?>"><div class="sprd-button secondary" data-lightbox="register-modal">Open a Store
            </div>
            <div>Already have a Eazyprint? 
              <a href="<?php echo base_url('login');?>"><span >Login here
              </span></a>
            </div>
          </nav>
        </div>
        <nav class="nav-pages">
          <ul>
            <li>
              <a href="<?php echo base_url('how_it_works');?>">How It Works
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('pricing');?>">Pricing
              </a>
            </li>
			 <li>
              <a href="<?php echo base_url('youtube_merch_maker');?>">YouTube Merchandise Maker
              </a>
            </li>
          </ul>
        </nav>        
        <div class="logo">
          <a href="<?php echo base_url();?>">
            <img src="<?php echo base_url('images');?>/logo.png" title="EazyPrint" alt="EazyPrint">
          </a>
        </div>
        <nav class="nav-user">
          <ul>
		   <li class="nav-user__login_it">
              <a href="<?php echo base_url('login');?>" style=""><span style="font-weight:bold;margin-left:25px;">Login</span>
              </a>
            </li>
       
            <li class="nav-user__register">
              <a href="<?php echo base_url('register');?>"><div class="sprd-button secondary" >Open a Store
              </div></a>
            </li>
          </ul>
        </nav>
      </div>
    </header>