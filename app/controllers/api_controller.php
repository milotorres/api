<?php

class ApiController extends AppController
{
    var $name = 'Api';

    var $uses = array('BusinessCategories','BusinessPackages','BusinessDescription','BusinessServices','BusinessEvents','BusinessReviews');

    var $helpers = array('Html', 'Form', 'Javascript', 'Ajax', 'Session');

    var $components = array('RequestHandler', 'Session', 'Email', 'Cookie');

    function beforeFilter()
    {
        $this->layout = 'json';
    }

    function json_response($data)
    {
        header("Pragma: no-cache");
        header("Cache-Control: no-store, no-cache, max-age=0, must-revalidate");
        header('Content-Type: application/json');
        echo json_encode($data);
    }
    /**
    Table categories
     */
    function bi_categories_getall()
    {
        try {
            $data = $this->BusinessCategories->find('all');

            if ($data != false){
                $this->json_response($data);
            }else{
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_categories_get_id($id)
    {
        try {
            $data = $this->BusinessCategories->findById($id);
            if ($data != false){
                $this->json_response($data);
            }else{
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_categories_create()
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $response = $this->BusinessCategories->query(
                    "INSERT INTO business_category  VALUES(default, '$name')");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha creado satisfactoriamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_categories_update($id)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $response = $this->BusinessCategories->query(
                    "Update business_category SET name='$name' WHERE id=$id ");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha creado satisfactoriamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_categories_delete($id = null)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($id)) {

                $response = $this->BusinessCategories->query(
                    "Delete From business_category WHERE id = '$id' ");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Recurso eliminado correctamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_categories_search($search = null)
    {

        if (!empty($search)) {
            $condition = "'%" . $search . "%'";
            $categories = $this->BusinessCategories->query("SELECT * FROM business_category WHERE name LIKE $condition");
            $this->json_response($categories);
        } else {
            $categories = $this->BusinessCategories->find('all');
            $this->json_response($categories);
        }
    }

    /**
     Table packages
     */


    function bi_packages_getall()
    {
        try {
            $data = $this->BusinessPackages->find('all');
            if ($data != false){
                $this->json_response($data);
            }else{
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_packages_get_id($id)
    {
        try {
            $data = $this->BusinessPackages->findById($id);

            if ($data != false){
                $this->json_response($data);
            }else{
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }


        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_packages_create()
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $monthly= $_POST['monthly'];
                $yearly = $_POST['yearly'];
                $response = $this->BusinessPackages->query(
                    "INSERT INTO business_packages  VALUES(default, '$name', '$price', '$monthly', '$yearly')");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha creado satisfactoriamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_packages_update($id)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $monthly= $_POST['monthly'];
                $yearly = $_POST['yearly'];
                $response = $this->BusinessPackages->query(
                    "Update business_packages SET name='$name',price='$price',monthly='$monthly',yearly='$yearly'  WHERE id=$id ");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha creado satisfactoriamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_packages_delete($id = null)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($id)) {

                $response = $this->BusinessPackages->query(
                    "Delete From business_packages WHERE id = '$id' ");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Recurso eliminado correctamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_packages_search($search = null)
    {

        if (!empty($search)) {
            $condition = "'%" . $search . "%'";
            $packages = $this->BusinessPackages->query("SELECT * FROM business_packages WHERE name LIKE $condition");
            $this->json_response($packages);
        } else {
            $packages = $this->BusinessPackages->find('all');
            $this->json_response($packages);
        }
    }


    /**
    Table description
     */

    function bi_description_getall()
    {
        try {
          //  $fields = array('BusinessDescription.id as id','BusinessCategories.id as id');
            $data = $this->BusinessDescription->find('all');
            if ($data != false){

                $this->json_response($data);
            }else{
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }



    function bi_description_get_id($id)
    {
        try {
            $data = $this->BusinessDescription->findById($id);
            if ($data != false){
                $this->json_response($data);
            }else{
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_description_create()
    {
        try{
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $description = $_POST['description'];
                $latitude = $_POST['latitude'];
                $length = $_POST['length'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $web_site = $_POST['web_site'];
                $image_banner = $_POST['image_banner'];
                $image_business = $_POST['image_business'];
                $location = $_POST['location'];
                $Features = $_POST['Features'];
                $Amenities = $_POST['Amenities'];
                $description_card = $_POST['description_card'];
                $business_category_id = $_POST['business_category_id'];
                $business_packages_id= $_POST['business_packages_id'];

                $response = $this->BusinessDescription->query(
                    "INSERT INTO business_description  VALUES(default, '$name','$description','$latitude'
                        ,'$length','$phone','$web_site','$image_banner','$image_business','$location','$email','$Features','$Amenities'
                        ,'$description_card','$business_category_id','$business_packages_id')");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha creado satisfactoriamente");
                } else {

                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_description_update($id)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $description = $_POST['description'];
                $latitude = $_POST['latitude'];
                $length = $_POST['length'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $web_site = $_POST['web_site'];
                $image_banner = $_POST['image_banner'];
                $image_business = $_POST['image_business'];
                $location = $_POST['location'];
                $Features = $_POST['Features'];
                $Amenities = $_POST['Amenities'];
                $description_card = $_POST['description_card'];
                $business_category_id = $_POST['business_category_id'];
                $business_packages_id= $_POST['business_packages_id'];
                $response = $this->BusinessDescription->query(
                    "Update business_description SET name='$name',description='$description',latitude='$latitude',
                     length='$length', phone='$phone',email='$email',web_site='$web_site',
                        image_banner='$image_banner',image_business='$image_business',location='$location',Features='$Features',Amenities='$Amenities',
                        description_card='$description_card',business_category_id='$business_category_id',business_packages_id='$business_packages_id'
                        WHERE id=$id");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha creado satisfactoriamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_description_delete($id = null)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($id)) {

                $response = $this->BusinessDescription->query(
                    "Delete From business_description WHERE id = '$id' ");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Recurso eliminado correctamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_description_search($search = null)
    {

        if (!empty($search)) {
            $condition = "'%" . $search . "%'";
            $description= $this->BusinessDescription->query("SELECT * FROM business_description WHERE name LIKE $condition");
            $this->json_response($description);
        } else {
            $description = $this->BusinessDescription->find('all');
            $this->json_response($description);
        }
    }


    /**
    Table services
     */

    function bi_services_getall()
    {
        try {
            $data = $this->BusinessServices->find('all');

            if ($data != false){
                $this->json_response($data);
            }else{
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_services_get_id($id)
    {
        try {
            $data = $this->BusinessServices->findById($id);
            if ($data != false){
                $this->json_response($data);
            }else{
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_services_create()
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $business_description_id = $_POST['business_description_id'];
                $response = $this->BusinessServices->query(
                    "INSERT INTO business_services  VALUES(default, '$name','$business_description_id')");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha creado satisfactoriamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_services_update($id)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $business_description_id = $_POST['business_description_id'];
                $response = $this->BusinessServices->query(
                    "Update business_services SET name='$name',business_description_id='$business_description_id' WHERE id=$id ");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha creado satisfactoriamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_services_delete($id = null)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($id)) {

                $response = $this->BusinessServices->query(
                    "Delete From business_services WHERE id = '$id' ");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Recurso eliminado correctamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_services_search($search = null)
    {

        if (!empty($search)) {
            $condition = "'%" . $search . "%'";
            $services = $this->BusinessServices->query("SELECT * FROM business_services WHERE name LIKE $condition");
            $this->json_response($services);
        } else {
            $services = $this->BusinessServices->find('all');
            $this->json_response($services);
        }
    }

    /**
    Table events
     */

    function bi_events_getall()
    {
        try {
            $data = $this->BusinessEvents->find('all');

            if ($data != false){
                $this->json_response($data);
            }else{
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_events_get_id($id)
    {
        try {
            $data = $this->BusinessEvents->findById($id);
            if ($data != false){
                $this->json_response($data);
            }else{
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_events_create()
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $date_start = $_POST['date_start'];
                $date_end = $_POST['date_end'];
                $business_description_id = $_POST['business_description_id'];
                $response = $this->BusinessEvents->query(
                    "INSERT INTO business_events  VALUES(default, '$name', '$date_start', '$date_end' , '$business_description_id')");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha creado satisfactoriamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_events_update($id)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $date_start = $_POST['date_start'];
                $date_end = $_POST['date_end'];
                $business_description_id = $_POST['business_description_id'];
                $response = $this->BusinessEvents->query(
                    "Update business_events SET name='$name', date_start='$date_start',date_end='$date_end',
                    business_description_id='$business_description_id' WHERE id=$id ");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha creado satisfactoriamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_events_delete($id = null)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($id)) {

                $response = $this->BusinessEvents->query(
                    "Delete From business_events WHERE id = '$id' ");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Recurso eliminado correctamente");
                } else {
                    $this->json_response($msj['msg'] = "error");
                }
            } else {
                $this->json_response($msj['msg'] = "error");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_events_search($search = null)
    {
        if (!empty($search)) {
            $condition = "'%" . $search . "%'";
            $events = $this->BusinessEvents->query("SELECT * FROM business_events WHERE name LIKE $condition");
            $this->json_response($events);
        } else {
            $events = $this->BusinessEvents->find('all');
            $this->json_response($events);
        }
    }
    /**
    Table reviews
     */
    function bi_reviews_getall()
    {
        try {
            $data = $this->BusinessReviews->find('all');

            if ($data != false){
                $this->json_response($data);
            }else{
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_reviews_get_id($id)
    {
        try {
            $conditions = array('BusinessReviews.business_description_id'=>$id);
            $data = $this->BusinessReviews->find('all',array('conditions'=>$conditions,'limit'=>5));
            if ($data != false){
                $this->json_response($data);
            }else{
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }



}

?>