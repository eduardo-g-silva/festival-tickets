<?php
use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google\BarChart;
use \koolreport\widgets\google\GeoChart;
use \koolreport\widgets\google\LineChart;

?>

    <div class="text-center">
        <h1>Tango Festival UK 2019 Sales Passes</h1>
        <h4>This report shows dancers</h4>
    </div>
    <hr/>

<?php


BarChart::create(array(
    "dataStore"=>$this->dataStore('dancers'),
    "width"=>"100%",
    "height"=>"500px",
    "showFooter"=>true,
    "columns"=>array(
        "type"=>array(
            "label"=>"Type"
        ),
        "dancers"=>array(
            "type"=>"number",
            "label"=>"Dancers",
            "footer"=>"sum",
            "footerText"=>"<b>Total Dancers:</b> @value"
        )
    ),
    "options"=>array(
        "title"=>"Paid Dancers"
    )
));
?>
<?php
Table::create(array(
    "dataStore"=>$this->dataStore('tickets-sold'),
    "showFooter"=>true,
    "columns"=>array(
        "name"=>array(
            "label"=>"name"
        ),
        "tickets"=>array(
            "type"=>"number",
            "label"=>"Tickets",
        ),
        "dancers"=>array(
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


<div class="report-container">
    <div class="text-center">
        <p class="lead">
            Dancers by country including competitors
        </p>
    </div>

    <div style="margin-bottom:50px;">
        <?php
        GeoChart::create(array(
            "title"=>"Dancers by country",
            "dataSource"=>$this->dataStore("map"),
            "columns"=>array(
                "country",
                "dancers"=>array(
                    "type"=>"number",
                    "label"=>"dancers"
                )
            ),
        ));
        ?>
    </div>
</div>

<?php
Table::create(array(
    "dataStore"=>$this->dataStore('map'),
    "showFooter"=>true,
    "columns"=>array(
        "country"=>array(
            "label"=>"country"
        ),
        "dancers"=>array(
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
<div class="report-content">
    <div class="text-center">
    <br>
        <h1>Sales by day</h1>
    </div>

    <div style="margin-bottom:50px;">
        <?php
        LineChart::create(array(
            "title"=>"Pases sold",
            "dataStore"=>$this->dataStore('byday'),
            "columns"=>array(
                "created_datetime",
                "dancers"=>array(
                    "label"=>"Sales",
                    "type"=>"number"
                ),
            )
        ));
        ?>
    </div>
</div>
