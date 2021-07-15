<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Sinh Viên</title>
    <link rel="stylesheet" href="../../PRACTICAL/public/bootstrap-5.0.1-dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <div class="row">
                <div class="col-9">
                    <h5 class="fw-bold">Library</h5>

                </div>
                <div class="col-3">
                    <form action="?route=search" method="post">
                        <div class="input-group flex-nowrap">
                            <input type="text" name="name" class="form-control" placeholder="Name Book" aria-label="Name Book" aria-describedby="addon-wrapping">
                            <button type="submit" class="input-group-text" id="addon-wrapping">Search</button>

                        </div>

                    </form>

                </div>

            </div>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Mã Sách</th>
                    <th scope="col">Mã Tác Giả</th>
                    <th scope="col">Tên Sách</th>
                    <th scope="col">ISBM</th>
                    <th scope="col">Năm Xuất Bản</th>
                    <th scope="col">Ngày Xuất Bản</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list_Books as $item){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $count++?></th>
                        <td><?php echo $item['bookid']?></td>
                        <td ><?php echo $item['authorid']?></td>
                        <td><?php echo $item['title']?></td>
                        <td><?php echo $item['ISBM']?></td>
                        <td><?php echo $item['pub_year']?></td>
                        <td><?php echo $item['available']?></td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>

</div>

<script src="../public/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
<script src="../public/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
</body>
</html>