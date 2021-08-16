<?= $this->Html->css('homepage'); ?>

<centerthis> <h1> Home Page </h1> </centerthis>
<!-- Contenedor -->
<div class="pricing-wrapper clearfix">
    <!-- Titulo -->
    <a href="/team078-app_fit3048/associates/index">
    <div class="pricing-table" style="cursor: pointer;" onclick="window.location='/team078-app_fit3048/associates/index';">
      <h3 class="pricing-title">Associates</h3>
      <!--<div class="price">Placeholder</div> -->
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">

      </ul>
       
      <!-- Contratar / Comprar -->
      <div class="table-buy"> 
      <?= $this->Html->link('View','/associates/index',['class'=> 'Button, pricing-action']); ?>
      </div>
    </div>
</a>



    <a href="/team078-app_fit3048/clients/index">
    <div class="pricing-table recommended" style="cursor: pointer;" onclick="window.location='/team078-app_fit3048/clients/index';">
      <h3 class="pricing-title">Client</h3>
      <!--<div class="price">Placeholder</div> -->
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">
      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
      <?= $this->Html->link('View','/clients/index',['class'=> 'Button, pricing-action']); ?>
      </div>
    </div>
</a>

<a href="/team078-app_fit3048/companys/index">
    <div class="pricing-table" style="cursor: pointer;" onclick="window.location='/team078-app_fit3048/companys/index';">
      <h3 class="pricing-title">Company</h3>
      <!-- <div class="price">Placeholder</div> -->
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">
      <!--  <li>100 GB <span>De almacenamiento</span></li> -->
      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
      <?= $this->Html->link('View','/companys/index',['class'=> 'Button, pricing-action']); ?>
      </div>
    </div>
  </div>
</a>

  <div class="pricing-wrapper clearfix">
    <!-- Titulo -->

<a href="/team078-app_fit3048/feeproposals/index">
    <div class="pricing-table" style="cursor: pointer;" onclick="window.location='/team078-app_fit3048/feeproposals/index';">
      <h3 class="pricing-title">Fee Proposals</h3>
      <!-- <div class="price">Placeholder</div> -->
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">
        

      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
        
      <?= $this->Html->link('View','/feeproposals/index',['class'=> 'Button, pricing-action']); ?>
      </div>
    </div>
</a>

<a href='/team078-app_fit3048/invoices/index'>
    <div class="pricing-table recommended" style="cursor: pointer;" onclick="window.location='/team078-app_fit3048/invoices/index';">
      <h3 class="pricing-title">Invoice</h3>
      <!-- <div class="price">Placeholder</div> -->
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">
      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
      <?= $this->Html->link('View','/invoices/index',['class'=> 'Button, pricing-action']); ?>
      </div>
    </div>
</a>


<a href="/team078-app_fit3048/projects/index">
<div class="pricing-table" style="cursor: pointer;" onclick="window.location='/team078-app_fit3048/projects/index';">
      <h3 class="pricing-title">Project</h3>
      <!-- <div class="price">Placeholder</div> -->
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">
      <!--  <li>100 GB <span>De almacenamiento</span></li> -->
      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
        <?= $this->Html->link('View','/projects/index',['class'=> 'Button, pricing-action']); ?>
      </div>
    </div>
  </div>
</a>
