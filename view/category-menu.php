<?php 
require_once("control/control.php");
?>
<div class="left-category-menu hidden-sm hidden-xs">
           <div class="left-product-cat">
               <div class="category-heading">
                   <h2>categories</h2>
               </div>
               <div class="category-menu-list">
                   <ul>
					<?php 
					
					$category = $control->get_data("category");
						?>
                       <!-- MENU MENU -->
						
						<?php 
						foreach($category['data'] AS $eachCategory)
						{	
							echo '<li class="arrow-plus">
								<a>'.$eachCategory['cat_name'].'</a>';
							
							$subCats = $control->get_data("subcategory", "cat_id", $eachCategory['cat_id']);
							####
							if($subCats['status'] == true)
							{
								echo '
								<div class="cat-left-drop-menu">
									   <div class="cat-left-drop-menu-left">
										   <ul>
								';
								foreach($subCats['data'] AS $subCat)
								{
									echo '<li><a href="catalog?id='.$subCat['subcat_id'].'">'.$subCat['subcat_name'].'</a></li>';
								}
								echo '
								</ul>
									   </div>
									   
								   </div>
								';
							}
							else
							{
								echo "No Sub Category";
							}
							####
								
							echo '</li>';
						}
						?>
						
                       <!--<li class="arrow-plus">
                           <a href="shop.php">Cameras & Photography</a>
							
                           <div class="cat-left-drop-menu">
                               <div class="cat-left-drop-menu-left">
                                   <ul>
                                       <li><a href="#">Blouses And Shirts</a></li>
                                       <li><a href="#">Clutches</a></li>
                                   </ul>
                               </div>
                               
                           </div>
							
                       </li>-->
						
						<!-- MENU MENU -->
                       
                       <!--<li class=" rx-parent">
                           <a class="rx-default">
                               More categories <span class="cat-thumb  fa fa-plus"></span> 
                           </a>
                           <a class="rx-show">
                               close menu <span class="cat-thumb  fa fa-minus"></span>
                           </a>
                       </li>-->
                       <!-- MENU ACCORDION END -->
                   </ul>
               </div>
           </div>
       </div>