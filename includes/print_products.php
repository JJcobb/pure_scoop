<?php

	echo "\n";
	echo "<div class='col-sm-4 text-center'>\n";
	echo "\t<div class='thumbnail product'>\n";

	echo "\t\t<h4>\n";
	echo "\t\t\t<span class='label label-default'>".$row->sub_category."</span>\n";
	echo "\t\t</h4>\n";

	echo "\t\t<div class='product-img' style='background-image:url(".$row->image_url.");'></div>\n";

	echo "\t\t<div class='caption'>\n";
	echo "\t\t\t<h4 class='no-top no-bottom h3'>".$row->name."</h4>\n";
	echo "\t\t</div>\n";

	echo "\t\t<div class='caption'>\n";
	echo "\t\t\t<p class='no-top no-bottom'>Inventory: ".$row->inventory."</h4>\n";
	echo "\t\t</div>\n";

	echo "\t\t<div class='caption delete' data-product-id='".$row->id."'>\n";
	echo "\t\t\t<button type='button' class='btn btn-danger'>&times;</button>\n";
	echo "\t\t</div>\n";

	echo "\t</div>\n";
	echo "</div>\n";

?>