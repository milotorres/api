<?php 
	class WebController extends AppController 
	{
		var $name = 'Web';
	
		var $uses = array('Usuarios');
	
		var $helpers = array('Html','Form','Javascript','Ajax','Session');
		
		var $components = array('RequestHandler','Session','Email','Cookie');
		
		function beforeFilter() 
		{
			$this->layout = 'json';
		} 
		
		function index($search = null)
		{
		     if(!empty($search)){
		        
		        $condition = "'%".$search."%'";
		        $usuario = $this->Usuarios->query("SELECT * FROM usuarios WHERE name LIKE $condition");
		        
    			$json = json_encode($usuario);
    			$this->set('json',$json);
		        
		    }else{
		        $usuarios = $this->Usuarios->find('all');
    			$json = json_encode($usuarios);
    			$this->set('json',$json);
		    }
		   
		}
	}
?>