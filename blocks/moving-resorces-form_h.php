<?php
//include('functions/function.php');

$que_city="SELECT * FROM city ";
$obj_city=mysqli_query($conn,$que_city);
while($data_city3=mysqli_fetch_assoc($obj_city))
{
	$data_city2[]=$data_city3;
}

$que_struct="SELECT * FROM category";
$obj_struct=mysqli_query($conn,$que_struct);
while($data_struct3=mysqli_fetch_assoc($obj_struct))
{
	$data_struct2[]=$data_struct3;
}

//var_dump($data_struct2);
?>
<h4 style="color:#E92324;font-weight:bold;">חפש משאבים נעים</h4>
<form action="../moving_resources_listings.php" method="GET" class="mvr-search">
    <div class="line">
        <select name="city" style="width:32%;" class="medium right-pad">
            <option value=''> בחר עיר</option>
            <?php
            foreach($data_city2 as $data_city)
            { ?>
                <option value='<?php echo $data_city['city_id'];?>' <?php if(isset($_GET['city']) && $_GET['city'] == $data_city['city_id']){ echo 'selected'; } ?>>
                    <?php echo $data_city['city_name_he'];?>
                </option>
            <?php }
            ?>
        </select>

            <select name="category" style="width:32%;" class="medium right-pad">
                <option value=''> בחר קטגוריה</option>
				<?php
				foreach($data_struct2 as $data_struct)
				{ ?>
                    <option value='<?php echo $data_struct['id'];?>' <?php if(isset($_GET['category']) && $_GET['category'] == $data_struct['id']){ echo 'selected'; } ?>>
						<?php echo $data_struct['name_he'];?>
                    </option>
				<?php }
				?>
            </select>
            <br>

            <input type="hidden" value="g" name="searchType">
<!--            <input type="submit" align="absmiddle" value="Search" class="search" name="search-submit">-->
            <input type="submit" name="search-submit" class="search" value="SEARCH" align="absmiddle" />
    </div>
</form>