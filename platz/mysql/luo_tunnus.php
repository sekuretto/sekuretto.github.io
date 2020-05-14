<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal">
Luo tunnus
</button>

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Luo tunnus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="platzform2.php" method="post" enctype="multipart/form-data" >
              <div class="form-group col-md-6">
                     <label for="staticEmail">Käyttäjätunnus </label>
                     <input type="text" class="form-control" name="statickt">
              </div>
              
              <div class="form-group col-md-6">
                     <label for="staticEmail">Sähköpostiosoite </label>
                     <input type="text" class="form-control" id="staticEmail" name="staticEmail">
              </div>
              <div class="form-group col-md-6">
                     <label for="staticEmail">Salasana </label>
                     <input type="text" class="form-control" id="passwd" name="passwd">
              </div>
              <div class="form-group col-md-6">
                     <label for="staticEmail">Vahvista salasana </label>
                     <input type="text" class="form-control" id="confirm-pass" name="confirm-pass">
              </div>
              <div class="form-group col-md-6">
                    <label for="inputState">Kaupunki</label>
                    <input type="text" class="form-control" id="city" name="city">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                <label class="form-check-label" for="dropdownCheck">
                    Hyväksyn käyttöehdot
                </label>
              </div>
              <input type="submit" class="btn btn-primary" name="submit" value="Lisää ilmoitus">
            </form>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
      </div>
    </div>
  </div>
   
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $('#notification').on('shown.bs.modal', function () {
  $('#notification').trigger('focus')
})
    
</script>


<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>