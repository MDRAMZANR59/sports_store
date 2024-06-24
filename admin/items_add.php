<?php include('include/header.php'); ?>

<!-- Content -->

<div class="container">
    <h4 class="page-header"><small>Items/</small> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">Items Information</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="fullname">Product Name</label>
                            <input type="text" name="name" class="form-control" id="fullname" placeholder="Product" required />
                            <label for="details">Product Details</label>
                            <input type="text" name="details" class="form-control" id="details" placeholder="Details" required />
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" class="form-control" id="photo" required />
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Price" required />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $name = $_POST['name'];
                            $details = $_POST['details'];
                            $price = $_POST['price'];
                            $created_at = date('Y-m-d H:i:s');
                            $created_by = 1; // Assuming 1 is the user ID

                            // Handle file upload
                            $target_dir = "uploads/";
                            $target_file = $_FILES["photo"]["name"];
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                            // Check if image file is a actual image or fake image
                            $check = getimagesize($_FILES["photo"]["tmp_name"]);
                            if ($check !== false) {
                                $uploadOk = 1;
                            } else {
                                echo "File is not an image.";
                                $uploadOk = 0;
                            }

                            // Check if file already exists
                            if (file_exists($target_file)) {
                                echo "Sorry, file already exists.";
                                $uploadOk = 0;
                            }

                            // Check file size
                            if ($_FILES["photo"]["size"] > 500000*1024) {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }

                            // Allow certain file formats
                            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "gif") {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }

                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
                            // if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                                    // Prepare data for insertion
                                    $data = [
                                        'name' => $name,
                                        'details' => $details,
                                        'photo' => $target_file,
                                        'price' => $price,
                                        'created_at' => $created_at,
                                        'created_by' => $created_by
                                    ];

                                    // Insert data into database
                                    $rs = $mysqli->common_create('items', $data);
                                    if ($rs) {
                                        if ($rs['data']) {
                                            echo "<script>window.location='{$baseurl}items_list.php'</script>";
                                        } else {
                                            echo $rs['error'];
                                        }
                                    }
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

<?php include('include/footer.php'); ?>
