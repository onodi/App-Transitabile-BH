<?php

use Cake\Core\Configure;

if (!$this->fetch('html')) {
    $this->start('html');
    printf('<html lang="%s">', Configure::read('App.defaultLocale'));
    $this->end();
}

if (!$this->fetch('title')) {
    $this->start('title');
    echo Configure::read('App.title');
    $this->end();
}

if (!$this->fetch('tb_body_start')) {
    $this->start('tb_body_start');
    echo '<body>';
    $this->end();
}

if (!$this->fetch('tb_body_end')) {
    $this->start('tb_body_end');
    echo '</body>';
    $this->end();
}

if (!$this->fetch('tb_footer')) {
    $this->start('tb_footer');
    echo '
    <footer class="footer">
        <div class="container">
            <p class="text-muted">
            &copy; Transitabile ' . date('Y') . '<br>
			Transitabile Sistema de Controle de Vagas Automotivas Ltda<br>
			CNPJ: 28.729.743/0001-16<br>
			www.transitabile.com.br<br>
			contato@transitabile.com.br 
            </p>
	    </div>
    </footer>
    ';
    $this->end();
}

if (!$this->fetch('tb_flash')) {
    $this->start('tb_flash');
    if (isset($this->Flash))
        echo $this->Flash->render();
    $this->end();
}

?>
<!DOCTYPE html>

<?= $this->fetch('html') ?>

    <!-- head -->

    <head>
        <meta charset="utf-8">
        <title><?= $this->fetch('title') ?></title>
        <meta name="author" content="Transitabile - Control">
        <meta name="description" content="Módulo de controle, para uso exclusivo de técnicos e administradores.">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		<meta name="resource-type" content="document">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="/control/css/bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="/control/css/main.css"/>
    </head>

    <!-- /.head -->
	
	<!-- script -->

    <script src="/control/js/jquery/jquery-3.2.1.min.js"></script>
	<script src="/control/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- /.script -->
    
    <!-- body -->
    <?php
        echo $this->fetch('tb_body_start');
    ?>

    <!-- content -->
    <?php
        echo $this->fetch('content');
    ?>
    <!-- /.content -->

    <!-- footer -->
    <?php
        echo $this->fetch('tb_footer');
    ?>

    <!-- /.footer -->

    <?php
        echo $this->fetch('tb_body_end');
    ?>

    <!-- /.body -->

    <?php
         echo $this->fetch('tb_flash');
    ?>

</html>
