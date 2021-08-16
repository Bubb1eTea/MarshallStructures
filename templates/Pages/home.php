<?= $this->Html->css('homepage'); ?>

<centerthis> <h1> Home Page </h1> </centerthis>
<!-- Contenedor -->
<div class="pricing-wrapper clearfix">
    <!-- Titulo -->
    <a href="/team078-app_fit3048/Associates/index">
    <div class="pricing-table">
      <h3 class="pricing-title">Associates</h3>
      <div class="price">Placeholder</div>
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">

      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
      <?= $this->Html->link('View','/Associates/index',['class'=> 'Button, pricing-action']); ?>
      </div>
    </div>
</a>


    <a href="/team078-app_fit3048/Clients/index">
    <div class="pricing-table recommended">
      <h3 class="pricing-title">Client</h3>
      <div class="price">Placeholder</div>
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">
      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
      <?= $this->Html->link('View','/Clients/index',['class'=> 'Button, pricing-action']); ?>
      </div>
    </div>
</a>

<a href="/team078-app_fit3048/companys/index">
    <div class="pricing-table">
      <h3 class="pricing-title">Company</h3>
      <div class="price">Placeholder</div>
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">
      <!--  <li>100 GB <span>De almacenamiento</span></li> -->
      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
      <?= $this->Html->link('View','/Companys/index',['class'=> 'Button, pricing-action']); ?>
      </div>
    </div>
  </div>
</a>

  <div class="pricing-wrapper clearfix">
    <!-- Titulo -->

<a href="/team078-app_fit3048/feeproposals/index">
    <div class="pricing-table">
      <h3 class="pricing-title">Fee Proposals</h3>
      <div class="price">Placeholder</div>
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">
        

      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
        
      <?= $this->Html->link('View','/feeproposals/index',['class'=> 'Button, pricing-action']); ?>
      </div>
    </div>
</a>

<a href='/team078-app_fit3048/Invoices/index'>
    <div class="pricing-table recommended">
      <h3 class="pricing-title">Invoice</h3>
      <div class="price">Placeholder</div>
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">
      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
      <?= $this->Html->link('View','/invoices/index',['class'=> 'Button, pricing-action']); ?>
      </div>
    </div>
</a>


<a href="/team078-app_fit3048/Projects/index">
    <div class="pricing-table">
      <h3 class="pricing-title">Project</h3>
      <div class="price">Placeholder</div>
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">
      <!--  <li>100 GB <span>De almacenamiento</span></li> -->
      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
        <?= $this->Html->link('View','/Projects/index',['class'=> 'Button, pricing-action']); ?>
      </div>
    </div>
  </div>
</a>
