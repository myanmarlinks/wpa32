<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Student List</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($students as $stu) { ?>
                            <tr>
                                <td><?php echo $stu['id']; ?></td>
                                <td><?php echo $stu['name']; ?></td>
                                <td><?php echo $stu['phone_no']; ?></td>
                            </tr>
                         <?php } ?>
                    </tbody>
                </table>  
            </div>
        </div>

    </div>
    <?php foreach($batches as $ba) { ?> 
        <?php var_dump($ba); ?>
        <h1> <?php echo $ba['id']; ?></h1>
        <?php 
        $class = [];
        foreach($classes as $class) {
            if($class['id'] == $ba['class_id']) {
                $class = $class["name"];
            }
            var_dump($class);
        }
        ?>
    <?php } ?>
</body>
</html>