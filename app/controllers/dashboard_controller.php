<?php
class DashboardController extends AppController
{
    var $name = 'Dashboard';

    var $uses = array('BusinessCategories');

    var $helpers = array('Html','Form','Javascript','Ajax','Session');

    var $components = array('RequestHandler','Session','Email','Cookie');

    function beforeFilter()
    {
        $theme = "/files/themes/enxona/";
        $this->set('theme',$theme);
        $this->layout = 'web';
    }



    //how-itworks.html*
    //about.html*
    //contacts.html*
    //dashboard-myprofile.html*
    //dashboard-add-listing.html*
    //listing.html*
    //listing-single.html*
}
?>