<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style="margin:50px;">
    <h1 style="text-align:center;">List of data</h1> <br>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <!-- <form action="" method="GET">
                <div class="input-group mb-5">
                    <input type="text" class="form-control" value="" name="search" placeholder="Search here">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form> -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $con = mysqli_connect("localhost", "root", "", "product_details");
                        $query = "SELECT ord.id,ord.fname,ord.addr,ord.city,ord.cstate, c.pname,c.category,c.price FROM order_details ord, cart c";
                        $result = mysqli_query($con,$query);
                            foreach ($result as $row)
                             {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['fname']; ?></td>
                                    <td><?php echo $row['addr']; ?></td>
                                    <td><?php echo $row['city']; ?></td>
                                    <td><?php echo $row['cstate']; ?></td>
                                    <td><?php echo $row['pname']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                </tr>
                                <?php
                            }
                    ?>
                </tbody>
            </table>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
                integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
                crossorigin="anonymous"></script>
</body>

</html>