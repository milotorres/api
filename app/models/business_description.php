<?php
class BusinessDescription extends AppModel {

    var $name = 'BusinessDescription';
    var $useTable = 'business_description';

    var $primaryKey = 'id';

    var $belongsTo = array(
        'BusinessCategories' => array(
            'className'	=> 'BusinessCategories',
            'foreignKey' => 'business_category_id'
        ),
           'BusinessPackages' => array(
            'className'	=> 'BusinessPackages',
            'foreignKey' => 'business_packages_id'
        )
    );



}

?>
