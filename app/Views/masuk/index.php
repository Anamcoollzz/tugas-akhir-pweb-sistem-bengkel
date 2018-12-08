<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('resources/style.css')?>">
</head>
<body>
  <div class="container-fluid bg">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <!-- form start -->
        <form id="formLogin" class="form-container" action="<?=base_url('masuk/proses')?>" method="post">
          <h1 class="text-center">SIKEL</h1>
          <div class="form-group">
            <label>Username</label>
            <input type="Username" class="form-control" placeholder="Username" name="username" id="username" value="">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="">
          </div>
          <button type="submit" class="btn btn-success btn-block" name="button">Let me in.</button>

        </form>

      </div>

    </div>

  </div>
  <script src="<?=base_url('resources/jquery.js')?>"></script>
  <script>
    $(function(){
      $('#formLogin').on('submit', function(e){
        e.preventDefault();
        var username = $('#username').val().trim();
        var password = $('#password').val().trim();
        $.ajax({
          url : '<?=base_url('masuk/proses')?>',
          type : 'POST',
          data : {
            username : username,
            password : password,
          },
          success : function(response){
            if(response == 'success'){
              window.location = '<?=base_url()?>';
            }else{
              alert(response);
            }
          }
        })
      });
    });
  </script>
</body>
</html>
