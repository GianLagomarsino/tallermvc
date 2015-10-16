<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Administracion Proveedores</title>
<?php
foreach($css_files as $file): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>

</style>
</head>
<body>

<div>

<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Administraci&oacuten de Proveedores</h2>
                    <hr class="primary">
                    <p><?php echo $output; ?></p>
                </div>
              
            </div>
        </div>
    </section>

</div>
</body>
</html>