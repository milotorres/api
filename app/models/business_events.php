<?php
class BusinessEvents extends AppModel {

    var $name = 'BusinessEvents';
    var $useTable = 'business_events';

    var $primaryKey = 'id';

    var $belongsTo = array(
        'BusinessDescription' => array(
            'className'	=> 'BusinessDescription',
            'foreignKey' => 'business_description_id'
        ),
    );


}

?>
