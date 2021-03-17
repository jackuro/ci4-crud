<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter 4 Add User With Validation Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/submit-form') ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" class="form-control">
      </div>

      <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control">
      </div>


      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          name: {
            required: true,
          },
          description: {
            required: true,
            maxlength: 60,
          },
          price: {
            required: true,
            maxlength: 6,
            float: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          description: {
            required: "description is required.",
            maxlength: "The email should be or equal to 60 chars.",
          },
          price: {
            required: "price is required.",
            maxlength: "The price should be or equal to 6 numbers.",
          },
        },
      })
    }
  </script>
</body>

</html>