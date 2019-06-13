<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page">
  <div class="page-inner">
    <header class="page-title-bar">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">
            <a href="user-profile.html"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Overview</a>
          </li>
        </ol>
      </nav>
    </header>
    <div class="page-section">
      <div class="row">
        <div class="col-lg-4">
          <div class="card card-fluid">
            <h6 class="card-header"> Your Details </h6>
            <nav class="nav nav-tabs flex-column border-0">
              <a href="user-profile-settings.html" class="nav-link active">Profile</a>
              <a href="user-account-settings.html" class="nav-link">Account</a>
              <a href="user-billing-settings.html" class="nav-link">Billing</a>
              <a href="user-notification-settings.html" class="nav-link">Notifications</a>
            </nav>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card card-fluid">
            <h6 class="card-header"> Public Profile </h6>
            <div class="card-body">
              <div class="media mb-3">
                <div class="user-avatar user-avatar-xl fileinput-button">
                  <div class="fileinput-button-label"> Change photo </div><img src="<?= base_url('publics'); ?>/assets/images/avatars/profile.jpg" alt=""> <input id="fileupload-avatar" type="file" name="avatar">
                </div>
                <div class="media-body pl-3">
                  <h3 class="card-title"> <?= $this->session->userdata('nama'); ?> </h3>
                  <h6 class="card-subtitle text-muted"> Click the current avatar to change your photo. </h6>
                  <p class="card-text">
                    <small>JPG, GIF or PNG 400x400, &lt; 2 MB.</small>
                  </p>
                  <div id="progress-avatar" class="progress progress-xs fade">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <form method="post">
                <div class="form-row">
                  <label for="input01" class="col-md-3">Cover image</label>
                  <div class="col-md-9 mb-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="input01" multiple> <label class="custom-file-label" for="input01">Choose cover</label>
                    </div><small class="text-muted">Upload a new cover image, JPG 1200x300</small>
                  </div>
                </div>
                <div class="form-row">
                  <label for="input02" class="col-md-3">Company</label>
                  <div class="col-md-9 mb-3">
                    <input type="text" class="form-control" id="input02" value="CreativeDivision">
                  </div>
                </div>
                <div class="form-row">
                  <label for="input03" class="col-md-3">Profile Heading</label>
                  <div class="col-md-9 mb-3">
                    <textarea class="form-control" id="input03">Huge fan of HTML, CSS and Javascript. Web design and open source lover.</textarea> <small class="text-muted">Appears on your profile page, 300 chars max.</small>
                  </div>
                </div>
                <div class="form-row">
                  <label for="input04" class="col-md-3">Available for hire?</label>
                  <div class="col-md-9 mb-3">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="input04" checked> <label class="custom-control-label" for="input04">Yes, hire me</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary ml-auto">Update Profile</button>
                </div>
              </form>
            </div>
          </div>
          <div class="card card-fluid">
            <h6 class="card-header"> Social Networks </h6>
            <form method="post">
              <div class="list-group list-group-flush mt-3 mb-0">
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <div class="tile tile-md bg-twitter">
                      <i class="fab fa-twitter"></i>
                    </div>
                  </div>
                  <div class="list-group-item-body">
                    <input type="text" class="form-control" id="twitter" placeholder="Twitter Username" value="@stilearningTwit">
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <div class="tile tile-md bg-facebook">
                      <i class="fab fa-facebook-f"></i>
                    </div>
                  </div>
                  <div class="list-group-item-body">
                    <input type="text" class="form-control" id="facebook" placeholder="Facebook Username">
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <div class="tile tile-md bg-linkedin">
                      <i class="fab fa-linkedin"></i>
                    </div>
                  </div>
                  <div class="list-group-item-body">
                    <input type="text" class="form-control" id="linkedin" placeholder="Linkedin Username">
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <div class="tile tile-md bg-dribbble">
                      <i class="fab fa-dribbble"></i>
                    </div>
                  </div>
                  <div class="list-group-item-body">
                    <input type="text" class="form-control" id="dribbble" placeholder="Dribbble Username">
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <div class="tile tile-md bg-github">
                      <i class="fab fa-github"></i>
                    </div>
                  </div>
                  <div class="list-group-item-body">
                    <input type="text" class="form-control" id="github" placeholder="Github Username">
                  </div>
                </div>
              </div>
              <div class="card-body">
                <hr>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary ml-auto">Update Socials</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
