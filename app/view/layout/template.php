<?= $this->include('layout/header'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="container-fluid">
      <div class="row content">
        <!-- sidebar -->
        <div class="col-md-2 col-md-2 col-xs-12 bg-light">
          <?= $this->include('layout/sidebar'); ?>
        </div>
        <!-- end sidebar  -->
        <!-- main -->
        <main role="main" class="col-md-10 col-md-10 col-xs-12  pt-3 px-4">
          <div class=" content">

            <?= $this->renderSection('content') ?>

          </div>
        </main>
        <!-- end main -->
      </div>
    </div>
  </div>
</div>

<?= $this->include('layout/footer'); ?>