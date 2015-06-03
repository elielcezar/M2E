<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * additional areas for the top and the bottom.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>
<div class="bootstrap panel-display panel-1col clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

 <!-- CONTENT CONTAINER-->
		
				<!-- FILTER-->
			<!-- just add your TAG to data-filter="ADD HERE" -->	
			<!-- and then add your same TAG to portfolio item class="ADD HERE" -->
			<div class="container">
			<div class="color-bottom-line center">				
					<div class="proj">
						<div id="filters">
						<a data-filter=".views-row" class="ione-col btn btn-danger">Todos</a>
						<a data-filter=".identidade-visual" class="btn ione-col btn-danger">Identidade Visual</a>
						<a data-filter=".design-grafico" class="btn ione-col btn-danger">Design Gráfico</a>
						<a data-filter=".web-design" class="btn ione-col btn-danger">Web Design</a>
						<a data-filter=".midias-sociais" class="btn ione-col btn-danger">Mídias Sociais</a>
						</div>
					</div>				
			</div>
			</div>
							
		<!--END: FILTER-->



		


<div class="container"><?php print $content['middle']; ?></div>









 </div>



