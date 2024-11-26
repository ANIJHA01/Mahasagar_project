<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add-Post</title>
    <style>
      #preview {
         width: 150px;
         height: auto;
      }
    </style>

    </head>
    <body>

    <div class="container-fluid">
            <div class="container animate-box fadeInUp animated-fast">
                <div class="bottom">
                <!-- form start -->
                    <form action=" " method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 offset-md-0 col-md-12">
                                <div class="card mb-5">
                                    <div class="card-header text-center">
                                        <h2>Add New Post</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-4">
                                            <label for="post_title">Title</label>
                                            <input id="post_title" name="post_title" class="form-control" autocomplete="off" required>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="postdesc">Content</label>
                                            <textarea id="postdesc" name="postdesc" class="form-control mycontarea"    rows="10" required></textarea>
                                        </div> 
                                    <div class="form-group mb-4">
                                        <label for="fileToUpload">Post image</label>
                                        <input id="fileToUpload" type="file" accept="image/*" name="fileToUpload" onchange="previewImage(event)" required>
                                        <br>
                                        <img id="preview" alt="Preview Image">
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <input accept="image/*" id="imgInp" type="hidden" name="form-name" value="add_news_post"/>
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
        
    </body>
</html>