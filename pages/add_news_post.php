<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<div class="AJtexteditor">
    <div class="container-fluid">
        <div class="container animate-box fadeInUp animated-fast">
            <div class="bottom">
                <!-- form start -->
                <form action=" " method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 offset-md-0 col-md-12">
                            <div class="card mb-5">
                                <div class="card-header text-center">
                                    <h2>Add News</h2>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-4">
                                        <label for="post_title">Title</label>
                                        <input id="post_title" name="post_title" class="form-control" autocomplete="off" required>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="postdesc">Content</label>
                                        <textarea id="postdesc" name="postdesc" class="form-control" rows="10"
                                            required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Category</label>
                                        <select name="category" class="form-control">
                                            <option disabled selected> Select Category</option>
                                            <?php
                                                include "config.php";
                                                $sql = "SELECT * FROM main_categories";
                                                $result = mysqli_query($db, $sql) or die("Query Failed.");

                                                if(mysqli_num_rows($result) > 1){
                                                    while($row = mysqli_fetch_assoc($result)){
                                                    echo "<option value='{$row['cat_id']}'>{$row['cat_name']}</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="post_author">Author</label>
                                        <input id="post_author" name="post_author" class="form-control" autocomplete="off" required>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="fileToUpload">Post image</label>
                                        <input id="fileToUpload" type="file" accept="image/*" name="fileToUpload"
                                            onchange="previewImage(event)" required>
                                        <br>
                                        <img id="preview" alt="Preview Image" style=" width: 150px; height: auto;">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input accept="image/*" id="imgInp" type="hidden" name="form-name"
                                        value="add_news_post" />
                                    <img id="blah" src="#" alt="Image preview" style="display: none; max-width: 100px;" />
                                    <input type="submit" name="submit" class="btn btn-primary" value="Save Post" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>