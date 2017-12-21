<?php
$options_array = array(
    'The First' => 'all',
    'Residential' => 'residential',
    'Lifestyle' => 'lifestyle',
    'Commercial' => 'commercial',
    'Rental' => 'rental'
);

switch ($_POST['action']) {
    case 'loadTypes' :
        $return = "";
        foreach($options_array as $k => $v) {
            $return .= sprintf("<option value='%s'>%s</option>", $k, $v);
        }
        print $return;

        break;
}