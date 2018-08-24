<?php
 require('header.php');
 require('nav.php');
?>
<div class="container">
    <div class="jumbotron">
    <h1 class="display-3">Hello, welcome to sudonote</h1>
    <p class="lead">A stylized version of Google Keep in progress !</p>
    <hr class="my-4">    
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#registermod">Register</a>        
        
        <div class="modal fade" id="registermod">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    </p>
    
    </div>
</div>
<?php
 require('footer.php');
?>