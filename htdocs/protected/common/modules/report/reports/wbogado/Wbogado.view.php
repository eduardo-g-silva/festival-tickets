<?php
use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google\BarChart;
use \koolreport\widgets\google\GeoChart;
?>

    <div class="text-center">
        <h1>Tango Festival UK 2020 Sales Passes</h1>
        <h4>This report shows bogado students</h4>
    </div>
    <hr/>


<?php
Table::create(array(
    "dataStore"=>$this->dataStore('wbogado'),
    "showFooter"=>true,
    "columns"=>array(
        "isbn"=>array(
            "label"=>"Code"
        ),
        "type"=>array(
            "label"=>"Type",
        ),
        "firstname"=>array(
            "label"=>"First Name",
        ),
        "lastname"=>array(
            "label"=>"Last Name",
        ),
        "email"=>array(
            "label"=>"Email",
        ),
        "country"=>array(
            "label"=>"Country",
        ),
        "order_id"=>array(
            "label"=>"Order",
        ),
        "dancers_qty"=>array(
            "type"=>"number",
            "label"=>"Dancers",
            "footer"=>"sum",
            "footerText"=>"<b>Total Dancers:</b> @value"
        )
    ),
    "cssClass"=>array(
        "table"=>"table table-hover table-bordered"
    )
));

?>
