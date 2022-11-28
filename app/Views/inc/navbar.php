<!--========== HEADER ==========-->
  <header id="header" ng-controller="headerController">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="<?php echo APP_URL;?>/">
              <img width="80" height="80" src="<?php echo APP_URL;?>/public/assets/img/strategy/80x80.png" class="attachment-large size-large" alt="Web and Mobile app development, web design, mobile developer" title="Web and Mobile app development, web design, mobile developer">                </a>
       
        
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ng-class="{'menu-active': menu_active == '1'}" ng-click="menu_active='1';hide_side_container()" ><a  href="{{dirlocation}}home/work">Case study </a></li>
          <li class="menu-has-children" ng-click="menu_active='2'" ng-class="{'menu-active': menu_active == '2'}"><a href="">Company  <span class="display-none"><i class="fa fa-chevron-down"></i></span></a>
            <ul>                        
              <li  ng-click="menu_active='2';hide_side_container()"><a href="{{dirlocation}}home/about">Who we are | Tega</a></li>
              <li ng-click="menu_active='2';hide_side_container()"> <a href="{{dirlocation}}home/training">Training</a></li>
              <li ng-click="menu_active='2';hide_side_container()"><a href="{{dirlocation}}home/blog">Blog</a></li>
              <li ng-click="menu_active='2';hide_side_container()"> <a href="{{dirlocation}}home/contact">Contact</a></li>
            </ul>
          </li>
     
          
          <li class="menu-has-children" ng-class="{'menu-active': menu_active == '3'}" ng-click="menu_active='3'">
            <a ng-click="menu_active='3';hide_side_container()" href="{{dirlocation}}home/services">Service <span class="display-none"><i class="fa fa-chevron-down"></i></span></a>
            <ul>
              <li ng-click="menu_active='3';hide_side_container()"><a href="{{dirlocation}}home/strategy">Strategy</a></li>
              <li ng-click="menu_active='3';hide_side_container()"> <a href="{{dirlocation}}home/web-design">Website Design</a></li>
              <li ng-click="menu_active='3';hide_side_container()"><a href="{{dirlocation}}home/web-app">Web Application Development</a></li>
              <li ng-click="menu_active='3';hide_side_container()"><a href="{{dirlocation}}home/mobile-app">Mobile App Development</a></li>
              <li ng-click="menu_active='3';hide_side_container()"><a href="{{dirlocation}}home/prototyping">Prototyping & MVP</a></li>
              <li ng-click="menu_active='3';hide_side_container()"><a href="{{dirlocation}}home/enterprise-solution">Enterprise Solution</a></li>
            </ul>
          </li>
          <li ng-class="{'menu-active': menu_active == '5'}" ng-click="menu_active='5';hide_side_container()" ><a  href="{{dirlocation}}home/become-a-partner">Become a partner </a></li>
          <li class="last-list" style="" ng-class="{'menu-active': menu_active == '4'}" ng-click="menu_active='4';hide_side_container()"><a  class=" btn-theme btn-theme-sm btn-blue-brd text-uppercase" href="{{dirlocation}}home/start-a-project">Start a Project</a></li>
        </ul>

      </nav>
     
    </div>
  </header>
  <!--
            <nav class="navbar" role="navigation">
                <div class="container">
                
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                     
                        <div class="logo">
                            <a class="logo-wrap" href="{{dirlocation}}">
                                <img class="logo-img logo-img-main" src="<?php echo APP_URL;?>/public/assets/img/logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="<?php echo APP_URL;?>/public/assets/img/logo-dark.png" alt="Asentus Logo">
                            </a>
                        </div>
                        
                    
                    </div>

                   ->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="{{dirlocation}}home/work">Case Studies</a></li>
                               
                                 <li class="nav-item dropdown">
                                 <a class="nav-item-child nav-item-hover " href="{{dirlocation}}Faq">Company</a>    
                                  <div class="dropdown-content">
                                    <a href="{{dirlocation}}home/about">Who we are | Tega</a>
                                     <a href="{{dirlocation}}home/training">Training</a>
                                      
                                       <a href="{{dirlocation}}home/product">Products</a>
                                       
                                        <a href="{{dirlocation}}home/blog">Blog</a>
                                        <a href="{{dirlocation}}home/contact">Contact</a>
                                     </div>
                                 </li>
                                  <li class="nav-item dropdown">
                                 <a class="nav-item-child nav-item-hover " href="{{dirlocation}}home/services">Service <span class="glyphicon-arrow-down"></span></a>    
                                  <div class="dropdown-content">
                                     <a href="{{dirlocation}}home/strategy">Strategy</a>
                                     <a href="{{dirlocation}}home/web-design">Website Design</a>
                                     <a href="{{dirlocation}}home/web-app">Web Application Development</a>
                                     <a href="{{dirlocation}}home/mobile-app">Mobile App Development</a>
                                     <a href="{{dirlocation}}home/prototyping">Prototyping & MVP</a>
                                     <a href="{{dirlocation}}home/enterprise-solution">Enterprise Solution</a>
                                    
                                     </div>
                                 </li>
                                
                               
                                    <li class="nav-item"><a style="margin-top: 20px" class=" btn-theme btn-theme-sm btn-blue-brd text-uppercase" href="{{dirlocation}}home/start-a-project">Start a Project</a></li>
                            </ul>
                                   

                        </div>

                    </div>
                
                </div>
            </nav>
          
        </header>
    -->
        <!--========== END HEADER ==========-->