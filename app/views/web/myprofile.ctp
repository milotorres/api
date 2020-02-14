<header class="main-header dark-header fs-header sticky">
    <div class="header-inner">
        <div class="logo-holder">
            <a href="index.html"><img src="<?php echo $html->url($theme)?>themes/enxona/images/logo.png" alt=""></a>
        </div>
        <div class="header-search vis-header-search">
            <div class="header-search-input-item">
                <input type="text" placeholder="Keywords" value=""/>
            </div>
            <div class="header-search-select-item">
                <select data-placeholder="All Categories" class="chosen-select" >
                    <option>All Categories</option>
                    <option>Shops</option>
                    <option>Hotels</option>
                    <option>Restaurants</option>
                    <option>Fitness</option>
                    <option>Events</option>
                </select>
            </div>
            <button class="header-search-button" onclick="window.location.href='listing.html'">Search</button>
        </div>
        <div class="show-search-button"><i class="fa fa-search"></i> <span>Search</span></div>
        <a href="dashboard-add-listing.html" class="add-list">Add Listing <span><i class="fa fa-plus"></i></span></a>
        <div class="header-user-menu">
            <div class="header-user-name">
                <span><img src="<?php echo $html->url($theme)?>themes/enxona/images/avatar/4.jpg" alt=""></span>
                Hello , Alisa
            </div>
            <ul>
                <li><a href="/web/dashboard_listing"><i class="fa fa-gears"></i>Dashboard</a></li>
                <li><a href="/web/myprofile"><i class="fa fa-user-o"></i> Edit profile</a></li>
                <li><a href="dashboard-messages.html"><i class="fa fa-envelope-o"></i> Messages <span>3</span></a></li>
                <li><a href="dashboard-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li
            </ul>
        </div>
        <!-- nav-button-wrap-->
        <div class="nav-button-wrap color-bg">
            <div class="nav-button">
                <span></span><span></span><span></span>
            </div>
        </div>
        <!-- nav-button-wrap end-->
        <!--  navigation -->
        <div class="nav-holder main-menu">
            <nav>
                <ul>
                    <li>
                        <a href="#">Home <i class="fa fa-caret-down"></i></a>
                        <!--second level -->
                        <ul>
                            <li><a href="index.html">Parallax Image</a></li>
                            <li><a href="index2.html">Video</a></li>
                            <li><a href="index3.html">Map</a></li>
                            <li><a href="index4.html">Slideshow</a></li>
                            <li><a href="index5.html">Slider</a></li>
                            <li><a href="index6.html">Fullscreen Slider</a></li>
                        </ul>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href="#">Listings <i class="fa fa-caret-down"></i></a>
                        <!--second level -->
                        <ul>
                            <li><a href="listing.html">Column map</a></li>
                            <li><a href="listing2.html">Column map 2</a></li>
                            <li><a href="listing3.html">Fullwidth Map</a></li>
                            <li><a href="listing4.html">Fullwidth Map 2</a></li>
                            <li><a href="listing5.html">Without Map</a></li>
                            <li><a href="listing6.html">Without Map 2</a></li>
                            <li>
                                <a href="#">Single <i class="fa fa-caret-down"></i></a>
                                <!--third  level  -->
                                <ul>
                                    <li><a href="listing-single.html">Style 1</a></li>
                                    <li><a href="listing-single2.html">Style 2</a></li>
                                    <li><a href="listing-single3.html">Style 3</a></li>
                                    <li><a href="listing-single4.html">Style 4</a></li>
                                </ul>
                                <!--third  level end-->
                            </li>
                        </ul>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href="blog.html">News</a>
                    </li>
                    <li>
                        <a href="#" class="act-link">Pages <i class="fa fa-caret-down"></i></a>
                        <!--second level -->
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="author-single.html">User single</a></li>
                            <li><a href="how-itworks.html">How it Works</a></li>
                            <li><a href="pricing-tables.html">Pricing</a></li>
                            <li><a href="dashboard-myprofile.html">User Dasboard</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                            <li><a href="dashboard-add-listing.html">Add Listing</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="header2.html">Header 2</a></li>
                            <li><a href="footer-fixed.html">Footer Fixed</a></li>
                        </ul>
                        <!--second level end-->
                    </li>
                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
    </div>
</header>
<!--  header end -->
<!-- wrapper -->
<div id="wrapper">
    <!--content -->
    <div class="content">
        <!--section -->
        <section>
            <!-- container -->
            <div class="container">
                <!-- profile-edit-wrap -->
                <div class="profile-edit-wrap">
                    <div class="profile-edit-page-header">
                        <h2>Edit profile</h2>
                        <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Edit profile</span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fixed-bar fl-wrap">
                                <div class="user-profile-menu-wrap fl-wrap">
                                    <!-- user-profile-menu-->
                                    <div class="user-profile-menu">
                                        <h3>Main</h3>
                                        <ul>
                                            <li><a href="dashboard.html"><i class="fa fa-gears"></i>Dashboard</a></li>
                                            <li><a href="dashboard-myprofile.html" class="user-profile-act"><i class="fa fa-user-o"></i> Edit profile</a></li>
                                            <li><a href="dashboard-messages.html"><i class="fa fa-envelope-o"></i> Messages <span>3</span></a></li>
                                            <li><a href="dashboard-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                                        </ul>
                                    </div>
                                    <!-- user-profile-menu end-->
                                    <!-- user-profile-menu-->
                                    <div class="user-profile-menu">
                                        <h3>Listings</h3>
                                        <ul>
                                            <li><a href="dashboard-listing-table.html"><i class="fa fa-th-list"></i> My listigs  </a></li>
                                            <li><a href="dashboard-bookings.html"> <i class="fa fa-calendar-check-o"></i> Bookings <span>2</span></a></li>
                                            <li><a href="dashboard-review.html"><i class="fa fa-comments-o"></i> Reviews </a></li>
                                            <li><a href="dashboard-add-listing.html"><i class="fa fa-plus-square-o"></i> Add New</a></li>
                                        </ul>
                                    </div>
                                    <!-- user-profile-menu end-->
                                    <a href="#" class="log-out-btn">Log Out</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <!-- profile-edit-container-->
                            <div class="profile-edit-container">
                                <div class="profile-edit-header fl-wrap">
                                    <h4>My Account</h4>
                                </div>
                                <div class="custom-form">
                                    <label>Your Name <i class="fa fa-user-o"></i></label>
                                    <input type="text" placeholder="AlisaNoory" value=""/>
                                    <label>Email Address<i class="fa fa-envelope-o"></i>  </label>
                                    <input type="text" placeholder="AlisaNoory@domain.com" value=""/>
                                    <label>Phone<i class="fa fa-phone"></i>  </label>
                                    <input type="text" placeholder="+7(123)987654" value=""/>
                                    <label> Adress <i class="fa fa-map-marker"></i>  </label>
                                    <input type="text" placeholder="USA 27TH Brooklyn NY" value=""/>
                                    <label> Website <i class="fa fa-globe"></i>  </label>
                                    <input type="text" placeholder="themeforest.net" value=""/>
                                    <label> Notes</label>
                                    <textarea cols="40" rows="3" placeholder="About Me"></textarea>
                                </div>
                            </div>
                            <!-- profile-edit-container end-->
                            <!-- profile-edit-container-->
                            <div class="profile-edit-container add-list-container">
                                <div class="profile-edit-header fl-wrap">
                                    <h4>Tariff plan</h4>
                                </div>
                                <div class="custom-form">
                                    <div class="row">
                                        <!--col -->
                                        <div class="col-md-4">
                                            <div class="add-list-media-header">
                                                <label class="radio inline">
                                                    <input type="radio" name="gender">
                                                    <span>Basic 99$</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--col end-->
                                        <!--col -->
                                        <div class="col-md-4">
                                            <div class="add-list-media-header">
                                                <label class="radio inline">
                                                    <input type="radio" name="gender"  checked>
                                                    <span>Extended 99$</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--col end-->
                                        <!--col -->
                                        <div class="col-md-4">
                                            <div class="add-list-media-header">
                                                <label class="radio inline">
                                                    <input type="radio" name="gender">
                                                    <span>Professional 149$</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--col end-->
                                    </div>
                                </div>
                            </div>
                            <!-- profile-edit-container end-->
                            <!-- profile-edit-container-->
                            <div class="profile-edit-container">
                                <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                                    <h4>My Socials</h4>
                                </div>
                                <div class="custom-form">
                                    <label>Facebook <i class="fa fa-facebook"></i></label>
                                    <input type="text" placeholder="https://www.facebook.com/" value=""/>
                                    <label>Twitter<i class="fa fa-twitter"></i>  </label>
                                    <input type="text" placeholder="https://twitter.com/" value=""/>
                                    <label>Vkontakte<i class="fa fa-vk"></i>  </label>
                                    <input type="text" placeholder="vk.com" value=""/>
                                    <label> Whatsapp <i class="fa fa-whatsapp"></i>  </label>
                                    <input type="text" placeholder="https://www.whatsapp.com" value=""/>
                                    <button class="btn  big-btn  color-bg flat-btn">Save Changes<i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                            <!-- profile-edit-container end-->
                        </div>
                        <div class="col-md-2">
                            <div class="edit-profile-photo fl-wrap">
                                <img src="<?php echo $html->url($theme)?>themes/enxona/images/avatar/4.jpg" class="respimg" alt="">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--profile-edit-wrap end -->
            </div>
            <!--container end -->
        </section>
        <!-- section end -->
        <div class="limit-box fl-wrap"></div>
        <!--section -->
        <section class="gradient-bg">
            <div class="cirle-bg">
                <div class="bg" data-bg="<?php echo $html->url($theme)?>images/bg/circle.png"></div>
            </div>
            <div class="container">
                <div class="join-wrap fl-wrap">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Do You Have Questions ?</h3>
                            <p>Lorem ipsum dolor sit amet, harum dolor nec in, usu molestiae at no.</p>
                        </div>
                        <div class="col-md-4"><a href="contacts.html" class="join-wrap-btn">Get In Touch <i class="fa fa-envelope-o"></i></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->
    </div>
</div>