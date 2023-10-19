<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User</title>
  </head>
  <body>
  <form action="../controller/User.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <h1>Kullanıcılar</h1>
                    <table class="table table-bordered">
                      <tr>
                            <th>#</th>
                            <th>İsim</th>
                            <th>Eposta</th>
                          </tr>
                      <div class="p-5">
                          <?php foreach ($data as $key=>$value): ?>
                            
                                
                                <tr>
                                  <td><?= $value['HastaID'] ?></td>

                                  <td><?= $value['HastaIsimsoyisim'] ?></td>
                                  <td> <?= $value['HastaEposta'] ?></td>
                                </tr>
                                <?php endforeach; ?>
                        </div>
                   </table>
             </div>

        </div>
    </div>
  </form>
  </body>
</html>