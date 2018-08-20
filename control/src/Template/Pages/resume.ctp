<?php
	$this->extend('../Layout/back');
    $this->assign('title', "Visão Geral - Transitabile Control");
?>
<h1 class="page-header">Visão Geral</h1>

<div id="hello">
    <?= explode(" ", $this->request->session()->read('Auth.User.name'))[0] ?>
</div>

<div id="date">
    <?= explode(" ", $this->request->session()->read('Auth.User.name'))[0] ?>
</div>

<hr>

<div class="row">
    <div class="col-md-3">
    <div class="square-module-block">
        <a href=<?php echo $this->Url->build([
            "controller" => "users",
            "action" => "clients"
        ]); ?>>
            <h2 class="ssb-title">Clientes</h2>  
        </a>
    </div>
    </div>
    
    <div class="col-md-3">
    <div class="square-module-block">
        <a href=<?php echo $this->Url->build([
            "controller" => "users",
            "action" => "fiscal"
        ]); ?>>
            <h2 class="ssb-title">Fiscais</h2>  
        </a>
    </div>
    </div>
    
    <div class="col-md-3">
    <div class="square-module-block">
        <a href=<?php echo $this->Url->build([
            "controller" => "users",
            "action" => "administrators"
        ]); ?>>
            <h2 class="ssb-title">Administradores</h2>  
        </a>
    </div>
    </div>

    <div class="col-md-3">
    <div class="square-module-block">
     <a href=<?php echo $this->Url->build([
            "controller" => "users",
            "action" => "index"
        ]); ?>>
            <h2 class="ssb-title">Todos os Usuários</h2>  
        </a>
    </div>
    </div>
    
    <div class="col-md-3">
    <div class="square-module-block">
        <a href=<?php echo $this->Url->build([
            "controller" => "queries",
            "action" => "index"
        ]); ?>>
            <h2 class="ssb-title">Consultas</h2>  
        </a>
    </div>
    </div>
    
    <div class="col-md-3">
    <div class="square-module-block">
        <a href=<?php echo $this->Url->build([
            "controller" => "proceedings",
            "action" => "index"
        ]); ?>>
            <h2 class="ssb-title">Autuações</h2>  
        </a>
    </div>
    </div>
    
    <div class="col-md-3">
    <div class="square-module-block">
        <a href=<?php echo $this->Url->build([
            "controller" => "orders",
            "action" => "revenues"
        ]); ?>>
            <h2 class="ssb-title">Faturamento</h2>  
        </a>
    </div>
    </div>
    
    <div class="col-md-3">
    <div class="square-module-block">
        <a href=<?php echo $this->Url->build([
            "controller" => "logs",
            "action" => "index"
        ]); ?>>
            <h2 class="ssb-title">Logs</h2>  
        </a>
    </div>
    </div>
    
</div>

<hr>

<script type="text/javascript">
    var message = '';
    var now = new Date();
    var hour = now.getHours();
    if (hour < 12)
    {
        message = 'Bom dia';
    }
    else if(hour >=12 && hour < 18)
    {
        message = 'Boa tarde';
    }
    else if(hour >= 18 && hour < 24)
    {
        message = 'Boa noite';
    }
    var element = document.getElementById('hello');
    element.innerHTML = message + element.innerHTML + "!";
    var days = new Array ("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");
    var months = new Array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
    element = document.getElementById('date');
    element.innerHTML = (days[now.getDay()] + ", " + now.getDate() + " de " + months[now.getMonth()] + " de " + now.getFullYear() + ".");
</script>
