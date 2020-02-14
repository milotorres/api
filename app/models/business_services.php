<?php
class BusinessServices extends AppModel {

    var $name = 'BusinessServices';
    var $useTable = 'business_services';

    var $primaryKey = 'id';

    var $belongsTo = array(
        'BusinessDescription' => array(
            'className'	=> 'BusinessDescription',
            'foreignKey' => 'business_description_id'
        ),
    );


}

?>
