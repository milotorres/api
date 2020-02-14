<?php

class ApiController extends AppController
{
    var $name = 'Api';

    var $uses = array('BusinessCategories', 'BusinessPackages', 'BusinessDescription', 'BusinessServices', 'BusinessEvents'
    , 'BusinessReviews', 'BusinessPromotions','BusinessCoupons','BusinessHours');

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
     * Table categories
     */
    function bi_categories_getall()
    {
        try {
            $data = $this->BusinessCategories->find('all');
            if ($data != false) {
                $this->json_response($data);
            } else {
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
            if ($data != false) {
                $this->json_response($data);
            } else {
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
     * Table packages
     */


    function bi_packages_getall()
    {
        try {
            $data = $this->BusinessPackages->find('all');
            if ($data != false) {
                $this->json_response($data);
            } else {
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

            if ($data != false) {
                $this->json_response($data);
            } else {
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
                $monthly = $_POST['monthly'];
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
                $monthly = $_POST['monthly'];
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
     * Table description
     */

    function bi_description_getall()
    {
        try {
            //  $fields = array('BusinessDescription.id as id','BusinessCategories.id as id');
            $data = $this->BusinessDescription->find('all');
            if ($data != false) {

                $this->json_response($data);
            } else {
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
            if ($data != false) {
                $this->json_response($data);
            } else {
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_description_create()
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
                $business_packages_id = $_POST['business_packages_id'];

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
                $business_packages_id = $_POST['business_packages_id'];
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
            $description = $this->BusinessDescription->query("SELECT * FROM business_description WHERE name LIKE $condition");
            $this->json_response($description);
        } else {
            $description = $this->BusinessDescription->find('all');
            $this->json_response($description);
        }
    }


    /**
     * Table services
     */

    function bi_services_getall()
    {
        try {
            $data = $this->BusinessServices->find('all');

            if ($data != false) {
                $this->json_response($data);
            } else {
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
            if ($data != false) {
                $this->json_response($data);
            } else {
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
     * Table events
     */

    function bi_events_getall()
    {
        try {
            $data = $this->BusinessEvents->find('all');

            if ($data != false) {
                $this->json_response($data);
            } else {
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
            if ($data != false) {
                $this->json_response($data);
            } else {
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
                $description= $_POST['description'];
                $image = $_POST['image'];
                $business_description_id = $_POST['business_description_id'];
                $response = $this->BusinessEvents->query(
                    "INSERT INTO business_events  VALUES(default, '$name', '$date_start', '$date_end' ,'$description', '$image', '$business_description_id')");
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
                $description= $_POST['description'];
                $image = $_POST['image'];
                $business_description_id = $_POST['business_description_id'];
                $response = $this->BusinessEvents->query(
                    "Update business_events SET name='$name', date_start='$date_start',date_end='$date_end',description='$description',image='$image',
                    business_description_id='$business_description_id' WHERE id=$id ");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha editado satisfactoriamente");
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
     * Table reviews
     */
    function bi_reviews_getall()
    {
        try {
            $data = $this->BusinessReviews->find('all');

            if ($data != false) {
                $this->json_response($data);
            } else {
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_reviews_get_id($id)
    {
        try {
            $conditions = array('BusinessReviews.business_description_id' => $id);
            $data = $this->BusinessReviews->find('all', array('conditions' => $conditions, 'limit' => 15));
            if ($data != false) {
                $this->json_response($data);
            } else {
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_reviews_create()
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $user_id = $_POST['user_id'];
                $rating = $_POST['rating'];
                $comment = $_POST['comment'];
                $business_description_id = $_POST['business_description_id'];
                $date_create = $_POST['date_create'];
                $response = $this->BusinessReviews->query(
                    "INSERT INTO business_reviews  VALUES(default, '$user_id', '$rating', '$comment' , '$business_description_id','$date_create')");
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

    /*
    function bi_reviews_update($id)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $user_id = $_POST['user_id'];
                $rating = $_POST['rating'];
                $comment = $_POST['comment'];
                $business_description_id = $_POST['business_description_id'];
                $date_create = $_POST['date_create'];
                $response = $this->BusinessReviews->query(
                    "Update business_reviews SET user_id='$user_id', rating='$rating',comment='$comment',
                    business_description_id='$business_description_id',date_create='$date_create' WHERE id=$id");
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
    }*/


    function bi_reviews_delete($id = null)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($id)) {

                $response = $this->BusinessReviews->query(
                    "Delete From business_reviews WHERE id = '$id' ");
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

    /**
     * Table promotions
     */

    function bi_promotions_getall()
    {
        try {
            $data = $this->BusinessPromotions->find('all');

            if ($data != false) {
                $this->json_response($data);
            } else {
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_promotions_get_id($id)
    {
        try {
            $conditions = array('BusinessPromotions.business_description_id' => $id);
            $data = $this->BusinessPromotions->find('all', array('conditions' => $conditions, 'limit' => 15));
            if ($data != false) {
                $this->json_response($data);
            } else {
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_promotions_create()
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $description = $_POST['description'];
                $date_start = $_POST['date_start'];
                $date_end = $_POST['date_end'];
                $business_description_id = $_POST['business_description_id'];

                $response = $this->BusinessPromotions->query(
                    "INSERT INTO business_promotions  VALUES(default, '$name', '$description', '$date_start' ,'$date_end', '$business_description_id')");
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
    function bi_promotions_update($id)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $description = $_POST['description'];
                $date_start = $_POST['date_start'];
                $date_end = $_POST['date_end'];
                $business_description_id = $_POST['business_description_id'];

                $response = $this->BusinessPromotions->query(
                    "Update business_promotions SET name='$name',description='$description',date_start='$date_start',
                    date_end='$date_end',business_description_id='$business_description_id' WHERE id=$id");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha editado satisfactoriamente");
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

    function bi_promotions_delete($id = null)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($id)) {

                $response = $this->BusinessPromotions->query(
                    "Delete From business_promotions WHERE id = '$id'");
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

    /**
     * Table coupons
     */
    function bi_coupons_getall()
    {
        try {
            $data = $this->BusinessCoupons->find('all');

            if ($data != false) {
                $this->json_response($data);
            } else {
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function bi_coupons_get_id($id)
    {
        try {
            $conditions = array('BusinessCoupons.business_description_id' => $id);
            $data = $this->BusinessCoupons->find('all', array('conditions' => $conditions, 'limit' => 5));
            if ($data != false) {
                $this->json_response($data);
            } else {
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_coupons_create()
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name_coupon = $_POST['name_coupon'];
                $business_coupons = $_POST['business_coupons'];
                $date_start = $_POST['date_start'];
                $expiration_date = $_POST['expiration_date'];
                $disount = $_POST['disount'];
                $business_description_id = $_POST['business_description_id'];

                $response = $this->BusinessCoupons->query(
                    "INSERT INTO business_coupons  VALUES(default, '$name_coupon', '$business_coupons','$date_start', '$expiration_date' ,'$disount', '$business_description_id')");
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
    function bi_coupons_update($id)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $name_coupon = $_POST['name_coupon'];
                $business_coupons = $_POST['business_coupons'];
                $date_start = $_POST['date_start'];
                $expiration_date = $_POST['expiration_date'];
                $disount = $_POST['disount'];
                $business_description_id = $_POST['business_description_id'];

                $response = $this->BusinessCoupons->query(
                    "Update business_coupons SET name_coupon='$name_coupon',business_coupons='$business_coupons',date_start='$date_start',
                    expiration_date='$expiration_date',disount='$disount',business_description_id='$business_description_id' WHERE id=$id");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha editado satisfactoriamente");
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
    function bi_coupons_delete($id = null)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($id)) {

                $response = $this->BusinessCoupons->query(
                    "Delete From business_coupons WHERE id = '$id'");
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
    /**
     * Table HOURS
     */

    function bi_hours_getall()
    {
        try {
            $data = $this->BusinessHours->find('all');

            if ($data != false) {
                $this->json_response($data);
            } else {
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_hours_get_id($id)
    {
        try {
            $data = $this->BusinessHours->findById($id);
            if ($data != false) {
                $this->json_response($data);
            } else {
                $this->json_response($msj['msg'] = "No se encontro el recurso");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function bi_hours_create()
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $monday_start = $_POST['monday_start'];
                $monday_end = $_POST['monday_end'];
                $tuesday_start = $_POST['tuesday_start'];
                $tuesday_end = $_POST['tuesday_end'];
                $wednesday_start = $_POST['wednesday_start'];
                $wednesday_end= $_POST['wednesday_end'];
                $thursday_start = $_POST['thursday_start'];
                $thursday_end = $_POST['thursday_end'];
                $friday_start = $_POST['friday_start'];
                $friday_end = $_POST['friday_end'];
                $saturday_start = $_POST['saturday_start'];
                $saturday_end = $_POST['saturday_end'];
                $sunday_start= $_POST['sunday_start'];
                $sunday_end = $_POST['sunday_end'];
                $business_description_id = $_POST['business_description_id'];
                $response = $this->BusinessHours->query(
                    "INSERT INTO business_hours  VALUES(default, '$monday_start','$monday_end','$tuesday_start',
                    '$tuesday_end','$wednesday_start','$wednesday_end','$thursday_start','$thursday_end','$friday_start',
                    '$friday_end','$saturday_start','$saturday_end','$sunday_start','$sunday_end','$business_description_id')");
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
    function bi_hours_update($id)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($_POST)) {
                $monday_start = $_POST['monday_start'];
                $monday_end = $_POST['monday_end'];
                $tuesday_start = $_POST['tuesday_start'];
                $tuesday_end = $_POST['tuesday_end'];
                $wednesday_start = $_POST['wednesday_start'];
                $wednesday_end = $_POST['wednesday_end'];
                $thursday_start = $_POST['thursday_start'];
                $thursday_end = $_POST['thursday_end'];
                $friday_start = $_POST['friday_start'];
                $friday_end = $_POST['friday_end'];
                $saturday_start = $_POST['saturday_start'];
                $saturday_end = $_POST['saturday_end'];
                $sunday_start = $_POST['sunday_start'];
                $sunday_end = $_POST['sunday_end'];
                $business_description_id = $_POST['business_description_id'];
                $response = $this->BusinessHours->query(
                    "Update business_hours SET monday_start='$monday_start', monday_end='$monday_end',tuesday_start='$tuesday_start',
                    tuesday_end='$tuesday_end',wednesday_start='$wednesday_start',wednesday_end='$wednesday_end',
                     thursday_start='$thursday_start',thursday_end='$thursday_end',friday_start='$friday_start',friday_end='$friday_end',
                     saturday_start='$saturday_start',saturday_end='$saturday_end',sunday_start='$sunday_start',sunday_end='$sunday_end',
                      business_description_id='$business_description_id' WHERE id=$id");
                if ($response != false) {
                    $this->json_response($msj['msg'] = "Se ha editado satisfactoriamente");
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
    function bi_hours_delete($id = null)
    {
        try {
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (!empty($id)) {

                $response = $this->BusinessHours->query(
                    "Delete From business_hours WHERE id = '$id'");
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


}

?>