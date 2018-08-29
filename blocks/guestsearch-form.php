<form action="guestsearch.php" name="searchForm" method="GET">

	<div class="line">
		<select name="city" style="width:32%;" class="medium right-pad">
			<?php
			foreach($data_city2 as $data_city)
			{ ?>
				<option value="<?php echo $data_city['city_id'];?>"><?php echo $data_city['city_name'];?></option>
			<?php }
			?>
		</select>
		<select name="structure_type" style="width:32%;" class="medium right-pad">
			<?php
			foreach($data_struct2 as $data_struct)
			{
				?>
				<option value="<?php echo $data_struct['struct_id'];?>"><?php echo $data_struct['name_en'];?></option>
				<?php
			}
			?>

		</select>

		<select name="priceLow" style="width:12%;" class="medium right-pad">
			<option value="0">From</option>

			<option value="">₪0</option>
			<option value="500">₪500</option>
			<option value="1000">₪1000</option>
			<option value="1500">₪1500</option>
			<option value="2000">₪2000</option>
			<option value="2500">₪2500</option>
			<option value="3000">₪3000</option>
			<option value="3500">₪3500</option>
			<option value="4000">₪4000</option>
			<option value="4500">₪4500</option>
			<option value="5000">₪5000</option>
			<option value="5500">₪5500</option>
			<option value="6000">₪6000</option>
			<option value="6500">₪6500</option>
			<option value="7000">₪7000</option>
			<option value="7500">₪7500</option>
			<option value="8000">₪8000</option>
			<option value="8500">₪8500</option>
			<option value="9000">₪9000</option>
			<option value="9500">₪9500</option>
			<option value="10000">₪10000</option>
			<option value="10500">₪10500</option>
			<option value="11000">₪11000</option>
			<option value="11500">₪11500</option>
			<option value="12000">₪12000</option>
			<option value="12500">₪12500</option>
			<option value="13000">₪13000</option>
			<option value="13500">₪13500</option>
			<option value="14000">₪14000</option>
			<option value="14500">₪14500</option>
			<option value="15000">₪15000</option>
			<option value="15500">₪15500</option>
			<option value="16000">₪16000</option>
			<option value="16500">₪16500</option>
			<option value="17000">₪17000</option>
			<option value="17500">₪17500</option>
			<option value="18000">₪18000</option>
			<option value="18500">₪18500</option>
			<option value="19000">₪19000</option>
			<option value="19500">₪19500</option>
			<option value="20000">₪20000</option>
			<option value="20500">₪20500</option>
			<option value="21000">₪21000</option>
			<option value="21500">₪21500</option>
			<option value="22000">₪22000</option>
			<option value="22500">₪22500</option>
			<option value="23000">₪23000</option>
			<option value="23500">₪23500</option>
			<option value="24000">₪24000</option>
			<option value="24500">₪24500</option>
			<option value="25000">₪25000</option>
			<option value="25500">₪25500</option>
			<option value="26000">₪26000</option>
			<option value="26500">₪26500</option>
			<option value="27000">₪27000</option>
			<option value="27500">₪27500</option>
			<option value="28000">₪28000</option>
			<option value="28500">₪28500</option>
			<option value="29000">₪29000</option>
			<option value="29500">₪29500</option>
			<option value="30000">₪30000</option>

		</select>

		<select name="priceHigh" style="width:12%;" class="medium ">
			<option value="">To</option>

			<option value="500">₪500</option>
			<option value="1000">₪1000</option>
			<option value="1500">₪1500</option>
			<option value="2000">₪2000</option>
			<option value="2500">₪2500</option>
			<option value="3000">₪3000</option>
			<option value="3500">₪3500</option>
			<option value="4000">₪4000</option>
			<option value="4500">₪4500</option>
			<option value="5000">₪5000</option>
			<option value="5500">₪5500</option>
			<option value="6000">₪6000</option>
			<option value="6500">₪6500</option>
			<option value="7000">₪7000</option>
			<option value="7500">₪7500</option>
			<option value="8000">₪8000</option>
			<option value="8500">₪8500</option>
			<option value="9000">₪9000</option>
			<option value="9500">₪9500</option>
			<option value="10000">₪10000</option>
			<option value="10500">₪10500</option>
			<option value="11000">₪11000</option>
			<option value="11500">₪11500</option>
			<option value="12000">₪12000</option>
			<option value="12500">₪12500</option>
			<option value="13000">₪13000</option>
			<option value="13500">₪13500</option>
			<option value="14000">₪14000</option>
			<option value="14500">₪14500</option>
			<option value="15000">₪15000</option>
			<option value="15500">₪15500</option>
			<option value="16000">₪16000</option>
			<option value="16500">₪16500</option>
			<option value="17000">₪17000</option>
			<option value="17500">₪17500</option>
			<option value="18000">₪18000</option>
			<option value="18500">₪18500</option>
			<option value="19000">₪19000</option>
			<option value="19500">₪19500</option>
			<option value="20000">₪20000</option>
			<option value="20500">₪20500</option>
			<option value="21000">₪21000</option>
			<option value="21500">₪21500</option>
			<option value="22000">₪22000</option>
			<option value="22500">₪22500</option>
			<option value="23000">₪23000</option>
			<option value="23500">₪23500</option>
			<option value="24000">₪24000</option>
			<option value="24500">₪24500</option>
			<option value="25000">₪25000</option>
			<option value="25500">₪25500</option>
			<option value="26000">₪26000</option>
			<option value="26500">₪26500</option>
			<option value="27000">₪27000</option>
			<option value="27500">₪27500</option>
			<option value="28000">₪28000</option>
			<option value="28500">₪28500</option>
			<option value="29000">₪29000</option>
			<option value="29500">₪29500</option>
			<option value="30000">₪30000</option>
		</select>


	</div>
	<input type="submit" name="search-submit" class="search" value="SEARCH" align="absmiddle" />


	<input type="hidden" name="searchType" value="g" />

</form>

<div class="text-search">
	<form method="post" action="#" name="textCodeSearch">
		<input id="listing_id" class="text" type="text" name="listing_id" placeholder="Search By Text Code" />
		<input class="search-sm" type="submit" name="text-submit" value="SEARCH" />
	</form>
</div>