<?php

namespace common\modules\report\reports;

use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google\BarChart;
use common\modules\report\reports;
?>

    <div class="text-center">
        <h1>Tango Festival UK 2019 Workshops Report</h1>
        <h4>This report shows workshps by teachers</h4>
    </div>
    <hr/>

<?php
Table::create(array(
    "dataStore"=>$this->dataStore('workshops_aldana'),
    "showFooter"=>true,
    "columns"=>array(
        "isbn"=>array(
            "label"=>"Code"
        ),
        "name"=>array(
            "label"=>"Name"
        ),
        "type"=>array(
            "label"=>"Type"
        ),
        "tickets"=>array(
            "type"=>"number",
            "label"=>"Tickets",
        ),
        "dancers"=>array(
            "type"=>"number",
            "label"=>"Dancers",
        ),
        "total"=>array(
            "type"=>"number",
            "label"=>"Total",
            "prefix"=>"£",
            "footer"=>"sum",
            "footerText"=>"<b>Total:</b> @value"
        )
    ),
    "cssClass"=>array(
        "table"=>"table table-hover table-bordered"
    )
));

Table::create(array(
    "dataStore"=>$this->dataStore('workshops_christian'),
    "showFooter"=>true,
    "columns"=>array(
        "isbn"=>array(
            "label"=>"Code"
        ),
        "name"=>array(
            "label"=>"Name"
        ),
        "type"=>array(
            "label"=>"Type"
        ),
        "tickets"=>array(
            "type"=>"number",
            "label"=>"Tickets",
        ),
        "dancers"=>array(
            "type"=>"number",
            "label"=>"Dancers",
        ),
        "total"=>array(
            "type"=>"number",
            "label"=>"Total",
            "prefix"=>"£",
            "footer"=>"sum",
            "footerText"=>"<b>Total:</b> @value"
        )
    ),
    "cssClass"=>array(
        "table"=>"table table-hover table-bordered"
    )
));

Table::create(array(
    "dataStore"=>$this->dataStore('workshops_zoto'),
    "showFooter"=>true,
    "columns"=>array(
        "isbn"=>array(
            "label"=>"Code"
        ),
        "name"=>array(
            "label"=>"Name"
        ),
        "type"=>array(
            "label"=>"Type"
        ),
        "tickets"=>array(
            "type"=>"number",
            "label"=>"Tickets",
        ),
        "dancers"=>array(
            "type"=>"number",
            "label"=>"Dancers",
        ),
        "total"=>array(
            "type"=>"number",
            "label"=>"Total",
            "prefix"=>"£",
            "footer"=>"sum",
            "footerText"=>"<b>Total:</b> @value"
        )
    ),
    "cssClass"=>array(
        "table"=>"table table-hover table-bordered"
    )
));

Table::create(array(
    "dataStore"=>$this->dataStore('workshops_stefania'),
    "showFooter"=>true,
    "columns"=>array(
        "isbn"=>array(
            "label"=>"Code"
        ),
        "name"=>array(
            "label"=>"Name"
        ),
        "type"=>array(
            "label"=>"Type"
        ),
        "tickets"=>array(
            "type"=>"number",
            "label"=>"Tickets",
        ),
        "dancers"=>array(
            "type"=>"number",
            "label"=>"Dancers",
        ),
        "total"=>array(
            "type"=>"number",
            "label"=>"Total",
            "prefix"=>"£",
            "footer"=>"sum",
            "footerText"=>"<b>Total:</b> @value"
        )
    ),
    "cssClass"=>array(
        "table"=>"table table-hover table-bordered"
    )
));
?>