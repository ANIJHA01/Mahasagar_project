
<div class="container-fluid">
            <div class="container animate-box fadeInUp animated-fast">

            <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 offset-md-0 col-md-12">
                                <div class="card mb-5">
                                    <div class="card-header text-center">
                                        <h2>Add Adds Post</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-4">
                                            <label for="ads_title">Title</label>
                                            <input id="ads_title" name="ads_title" class="form-control" autocomplete="off" required>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="ads_added">page-author</label>
                                            <input id="ads_added" name="ads_added" class="form-control" autocomplete="off" required>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="ads_content">Content</label>
                                            <textarea id="ads_content" name="ads_content" class="newsConEditor form-control" rows="10" required></textarea>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="fileToUpload">Post image</label>
                                            <input id="fileToUpload" type="file" accept="image/*" name="fileToUpload" onchange="previewImage(event)" required>
                                            <br>
                                            <img id="preview" alt="Preview Image" style="width: 130px; height: auto;">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <input type="hidden" name="form-name" value="add_advertisement" />
                                        <input type="submit" name="submit" class="btn btn-primary" value="Save-ads Post" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- form end -->


                </div>
            </div>