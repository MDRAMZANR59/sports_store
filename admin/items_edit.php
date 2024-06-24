<?php include('include/header.php'); ?>

<div class="container">
    <h4 class="page-header"><small>Items/</small> Edit</h4>
    <?php 
        $olddata = array();
        $con['id'] = $_GET['id'];
        $result = $mysqli->common_select_single('items', '*', $con);
        if ($result && $result['data']) {
            $olddata = $result['data'];
        }
    ?>
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">Item Information</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="fullname">Product Name</label>
                            <input type="text" name="name" class="form-control" id="fullname" placeholder="Product" value="<?= isset($olddata->name) ? $olddata->name : '' ?>" required />
                            <label for="details">Product Details</label>
                            <input type="text" name="details" class="form-control" id="details" placeholder="Details" value="<?= isset($olddata->details) ? $olddata->details : '' ?>" required />
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" class="form-control" id="photo" />
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Price" value="<?= isset($olddata->price) ? $olddata->price : '' ?>" required />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $data = [
                                'name' => $_POST['name'],
                                'details' => $_POST['details'],
                                'price' => $_POST['price'],
                                'updated_at' => date('Y-m-d H:i:s'),
                                'updated_by' => 1
                            ];

                            // Handle file upload
                            if (!empty($_FILES['photo']['name'])) {
                                $target_dir = "uploads/";
                                $target_file = $target_dir . basename($_FILES["photo"]["name"]);
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

                                // Check file size
                                if ($_FILES["photo"]["size"] > 500000) {
                                    echo "Sorry, your file is too large.";
                                    $uploadOk = 0;
                                }

                                // Allow certain file formats
                                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                    $uploadOk = 0;
                                }

                                // Check if $uploadOk is set to 0 by an error
                                if ($uploadOk == 1) {
                                    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                                        $data['photo'] = $target_file;
                                    } else {
                                        echo "Sorry, there was an error uploading your file.";
                                    }
                                }
                            }

                            $rs = $mysqli->common_update('items', $data, $con);
                            if ($rs) {
                                if ($rs['data']) {
                                    echo "<script>window.location='{$baseurl}items_list.php'</script>";
                                } else {
                                    echo "Error: " . $rs['error'];
                                }
                            } else {
                                echo "An unexpected error occurred.";
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
