<?php
use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google\BarChart;
?>

    <div class="text-center">
        <h1>Tango Festival UK 2020 Sales Report</h1>
        <h4>This report shows top sales</h4>
    </div>
    <hr/>

<?php
BarChart::create(array(
    "dataStore"=>$this->dataStore('festival_sales'),
    "width"=>"100%",
    "height"=>"500px",
    "showFooter"=>true,
    "columns"=>array(
        "name"=>array(
            "label"=>"Name"
        ),
        "total"=>array(
            "type"=>"number",
            "label"=>"Total",
            "prefix"=>"£",
            "footer"=>"sum",
            "footerText"=>"<b>Total:</b> @value"
        )
    ),
    "options"=>array(
        "title"=>"Workshops Sales"
    )
));
?>
<?php
Table::create(array(
    "dataStore"=>$this->dataStore('festival_sales'),
    "showFooter"=>true,
    "columns"=>array(
        "name"=>array(
            "label"=>"Code"
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