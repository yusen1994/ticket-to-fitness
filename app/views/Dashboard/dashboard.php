<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container mt-5">

<?php echo $data['title']; ?>


        <a href="<?php echo URLROOT; ?>/Accounts/logout" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
      </p> 
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
