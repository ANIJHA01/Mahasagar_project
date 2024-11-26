<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit-Post</title>

    </head>
    <body>

        <div class="container-fluid">
            <div class="container animate-box fadeInUp animated-fast">
                <div class="bottom">
                <?php
                    $sql = "SELECT id, news_title, news_description , news_banner FROM news_posts ";
                    $result = mysqli_query($db, $sql) or die("Query Failed: " . mysqli_error($db));
                    if(mysqli_num_rows($result) > 0){
                        while($row= mysqli_fetch_assoc($result)){ 
                            if($row["id"] == $_GET["id"]){
                ?>
                <!-- form start -->
                <form action=" " method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                            <div class="col-12 offset-md-0 col-md-12">
                                <div class="card mb-5">
                                    <div class="card-header text-center">
                                    <h2>Edit Post</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-4">
                                            <input type="hidden" name="news_id" class="form-control" value="<?php echo $row['id']; ?>">
                                            <label for="title">Title</label>
                                            <input name="post_title" type="text" id="title" class="form-control mycontarea" value="<?php echo $row['news_title']; ?> ">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="content">Content</label>
                                            <textarea name="postcontent" id="content" class="form-control newsPostEditor" required rows="5"><?php echo $row['news_description']; ?></textarea>
                                        <div class="form-group mb-4">
                                            <label for="">Post image</label>
                                            <input id="fileToUpload" type="file" accept="image/*" name="new-image" onchange="previewImage(event)">
                                            <br>
                                            <img id="preview" alt="Preview Image" src="<?=NEWS_UPLOAD_URL.$row['news_banner']?>" style="width: 130px; height: auto;">
                                            <input type="hidden" name="old-image" value="<?php echo $row['news_banner']; ?>">
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
        <script src="<?=BASE_URL?>web/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    </body>
</html>