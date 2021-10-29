<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('examples/customers_management')?>'>Clasificaciones</a> |
		<a href='<?php echo site_url('examples/orders_management')?>'>Resultados</a> |
		<a href='<?php echo site_url('examples/products_management')?>'>Estadísticas</a> |
		<a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> | 
		
		
	</div>
	<div style='height:40px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
