<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost:8080/ide-web/css/bootstrap.min.css">
  <script src="http://localhost:8080/ide-web/js/bootstrap.min.js"></script>
<title>Short It !</title>
</head>
    <body>
        <div class="jumbotron text-center bg-warning">
            <h1>Short It !</h1>
        </div>
        <div class="container">
            <form class="row d-flex justify-content-center" action="<?php echo base_url('url/add') ?>" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Place url here" aria-label="Place url here" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-warning" type="button">Short It !</button>
                </div>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Url</th>
                        <th>Token</th>
                        <th>Short Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($urls as $url): ?>
                    <tr>
                        <td width="150">
                            <?php echo $url->url ?>
                        </td>
                        <td>
                            <?php echo $url->token ?>
                        </td>
                        <td>
                            <a href="<?php echo $url->url ?>" target="_blank"><?php echo 'http://shrt.it/'.$url->token ?></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>