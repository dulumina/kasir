<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page">
  <!-- .page-inner -->
  <div class="page-inner">
    <!-- .page-title-bar -->
    <header class="page-title-bar">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">
            <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Components</a>
          </li>
        </ol>
      </nav>
      <h1 class="page-title"> Sortable & Nestable List </h1>
    </header><!-- /.page-title-bar -->
    <!-- .page-section -->
    <div class="page-section">

      <!-- .section-block -->
      <div class="section-block">
        <h2 class="section-title"> Nestable </h2>
        <p class="text-muted"> Drag & drop hierarchical list with mouse and touch compatibility. </p>
      </div><!-- /.section-block -->
      <!-- grid row -->
      <div class="row">
        <!-- grid column -->
        <div class="col-lg-9">
          <!-- .card -->
          <div class="card card-fluid">
            <div class="card-header border-bottom-0"> Slidebar Menus </div><!-- .nestable -->
            <div id="nestable01" class="dd" data-toggle="nestable" data-group="1" data-max-depth="5">
              <!-- .dd-list -->

              <ol class="dd-list">
                <?php foreach ($menu as $row) { ?>

                  <li class="dd-item" data-id="1">
                    <div class="dd-handle">
                      <span class="drag-indicator"></span>
                      <div> <?= $row->judulMenu; ?> </div>
                      <div class="dd-nodrag btn-group ml-auto">
                        <button class="btn btn-sm btn-secondary">Edit</button> <button class="btn btn-sm btn-secondary"><i class="far fa-trash-alt"></i></button>
                      </div>
                    </div>

                    <?php if (is_array($row->submenu)) {
                      foreach ($row->submenu as $submenu ) {
                      ?>

                    <ol class="dd-list">
                      <li class="dd-item" data-id="1">
                        <div class="dd-handle">
                          <span class="drag-indicator"></span>
                          <div> <?= $submenu->judulMenu; ?> </div>
                          <div class="dd-nodrag btn-group ml-auto">
                            <button class="btn btn-sm btn-secondary">Edit</button> <button class="btn btn-sm btn-secondary"><i class="far fa-trash-alt"></i></button>
                          </div>
                        </div>
                      </li>
                    </ol>
                    <?php } } ?>

                  </li>

                <?php }; ?>
              </ol><!-- /.dd-list -->

            </div><!-- /.nestable -->
            <!-- .card-footer -->
            <div class="card-footer">
              <a href="#" class="card-footer-item justify-content-start"><span><i class="fa fa-plus-circle mr-1"></i> Add Menu Item</span></a>
            </div><!-- /.card-footer -->
          </div><!-- /.card -->
        </div><!-- /grid column -->

      </div><!-- /grid row -->

    </div><!-- /.page-section -->
  </div><!-- /.page-inner -->
</div><!-- /.page -->
