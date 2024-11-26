<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AdsEditPost</title>        
    </head>
    <body>

        <div class="container-fluid">
            <div class="container animate-box fadeInUp animated-fast">
                <div class="bottom">
                <?php
                    $sql = "SELECT ads_id, ads_title, ads_content , ads_image FROM news_ads ";
                    $result = mysqli_query($db, $sql) or die("Query Failed: " . mysqli_error($db));
                    if(mysqli_num_rows($result) > 0){
                        while($row= mysqli_fetch_assoc($result)){ 
                            if ($row["ads_id"] == 9) {
                ?>
                <form action=" " method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                            <div class="col-12 offset-md-0 col-md-12">
                                <div class="card mb-5">
                                    <div class="card-header text-center">
                                    <h2>Ads Edit Post</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-4">
                                            <input type="hidden" name="news_id" class="from-control" value="<?php echo $row['ads_id']; ?>">
                                            <label for="title">Title</label>
                                            <input class="form-control" name="post_title" type="text" id="title" value="<?php echo $row['ads_title']; ?> ">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="content">Content</label>
                                            <textarea class="form-control newsPostEditor" name="postcontent" id="content" required rows="5"><?php echo $row['ads_content']; ?></textarea>
                                        <div class="form-group mb-4">
                                            <label for="">Post image</label>
                                            <input id="fileToUpload" type="file" accept="image/*" name="new-image" onchange="previewImage(event)">
                                            <!-- <img src="uploads/<?php echo $row['ads_image']; ?>" style="width: 100px; height: auto;"> -->
                                            <br>
                                            <img id="preview" alt="Preview Image" src="<?=NEWS_UPLOAD_URL.$row['ads_image']?>" style="width: 130px; height: auto;">
                                            <input type="hidden" name="old-image" value="<?php echo $row['ads_image']; ?>">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <input type="hidden" name="form-name" value="edit_news_post" />
                                        <input type="submit" name="submit" class="btn btn-primary" value="save-update"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php 
                                }
                            }
                        }else{
                            echo "Result not found";
                        }
                    ?>
                </div>
            </div>
        </div>
        
    </body>
</html>