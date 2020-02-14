<?php 
	class WebController extends AppController 
	{
		var $name = 'Web';
	
		var $uses = array('BusinessCategories');
	
		var $helpers = array('Html','Form','Javascript','Ajax','Session');
		
		var $components = array('RequestHandler','Session','Email','Cookie');
		
		function beforeFilter() 
		{
			$theme = "/files/";
			$this->set('theme',$theme);
			$this->layout = 'web';
		} 
		
		function index($search = null)
		{
		   
		}
		function functioning(){

        }
        function about(){

        }
        function contacts(){

        }

        function listing(){

        }

        function listing_single(){

        }
        function dashboard_listing(){

        }

        function message_dashboard(){

        }
        function change_password(){

        }
        function dashboard_table(){

        }
        function myprofile(){

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