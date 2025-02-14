<div class="container-edit" style="text-align:center; ">
    <div class="col-12 offset-md-0 col-md-12">
        <div class="card mb-5">
            <div class="card-header text-center">
                <h2>Edit News</h2>
            </div>
            <div class="container-fluid">
                <div class="container animate-box">
                    <div class="row">
                        <div class="post-header">
                            <div class="bread">
                            <ul class="breadcrumbs" id="breadcrumbs">
                                    <li class="item-home">You are here: <a class='bread-link bread-home' href='/' title='Home'>Home</a></li>
                                    <li class="separator separator-home"> /</li>
                                    <li class="item-current item-cat">
                                    <?php
                                        global $db;
                                        $news_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

                                        if ($news_id > 0) {
                                            $sql = "SELECT main_categories.cat_id, main_categories.cat_name 
                                                    FROM news_posts 
                                                    JOIN main_categories ON news_posts.category = main_categories.cat_id 
                                                    WHERE news_posts.id = ?";

                                            if ($stmt = $db->prepare($sql)) {
                                                $stmt->bind_param("i", $news_id);
                                                $stmt->execute();
                                                $result = $stmt->get_result();

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        $categoryID = $row['cat_id'];
                                                        $categoryName = htmlspecialchars($row['cat_name']); 

                                                        echo "<a class='bread-link bread-home' href='#' title='Category'>" . ucfirst(strtolower($categoryName)) . "</a>";
                                                    }
                                                } else {
                                                    echo '<a class="bread-link bread-home" href="#" title="Categories Dropdown">Unknown Category</a>';
                                                }

                                                $stmt->close();
                                            }
                                        }
                                        ?>

                                        <ul class="dropdown">
                                            <?php
                                                $category_sql = "SELECT * FROM main_categories";
                                                $category_result = mysqli_query($db, $category_sql);

                                                
                                                if ($category_result) {
                                                    if (mysqli_num_rows($category_result) > 0) {
                                                        while ($category_row = mysqli_fetch_assoc($category_result)) {
                                                            $categoryName = htmlspecialchars($category_row['cat_name']); 
                                                            echo "<li><a href='javascript:void(0);' onclick='updateCategory({$category_row['cat_id']})'>" . strtoupper($categoryName) . "</a></li>";
                                                        }
                                                    }
                                                } else {
                                                    echo "<li>Error retrieving categories.</li>";
                                                }
                                            ?>
                                        </ul>
                                    </li>
                                    <li class="separator separator-home"> /</li>
                                    <li class="item-current item-cat"><strong class="bread-current bread-cat">SubCategorie Dropdown</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                    <div class="container">
                        <div class="primary margin-15">
                            <div class="row row justify-content-center">
                                <div class="col-md-8">
                                    <article class="section_margin">
                                <?php
                                    global $db;
                                    $sql = "SELECT * FROM news_posts ";
                                    $result = mysqli_query($db, $sql) or die("Query Failed: " . mysqli_error($db));
                                    if(mysqli_num_rows($result) > 0){
                                        while($row= mysqli_fetch_assoc($result)){ 
                                            if($row["id"] == $_GET["id"]){
                                ?>
                                                <!-- img section-->
                                                <div class="news-image-container" >
                                                    <figure class="alith_news_img animate-box">
                                                        <a href='#'>
                                                            <img id="newsImage" src="<?= NEWS_UPLOAD_URL . $row['news_banner'] ?>" alt="No img there" />
                                                        </a>
                                                    </figure>
                                                    <label class="btn btn-sm btn-info">
                                                        <i class="fa fa-edit"></i> Edit
                                                        <input type="file" id="UpdateNewsPostImage" class="d-none" onchange="updateNewsImage(this, <?= $row['id']; ?>)" />
                                                    </label>
                                                </div>
                                                <!-- img section end-->

                                                <div class="post-content">
                                                    <!-- title section-->
                                                    <div class="single-header" style="border:1px dotted black">
                                                        <h3 class="alith_post_title"><?php echo $row['news_title']; ?></h3>
                                                        <div class="post_meta">
                                                            <a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
                                                            <span class="meta_author_name"><a class='author' href='/page-author'><?php echo $row['page_author']; ?></a></span>
                                                            <!-- category section -->
                                                            <?php
                                                                $category_id = $row['category']; 
                                                                $sql_category_name = "SELECT cat_name FROM main_categories WHERE cat_id = ?";
                                                                $stmt_category_name = $db->prepare($sql_category_name);
                                                                $stmt_category_name->bind_param("i", $category_id);
                                                                $stmt_category_name->execute();
                                                                $stmt_category_name->bind_result($category_name);
                                                                $stmt_category_name->fetch();

                                                                $category_name = $category_name ? $category_name : 'Uncategorized';
                                                            ?>
                                                            <span class="meta_categories"><a href="archive.html"> <?= htmlspecialchars($category_name); ?></a>, <a href="archive.html">News</a></span>
                                                            <span class="meta_date"><?php echo $row['modified_dt']; ?></span>
                                                        </div>
                                                    </div>
                                                    <!-- title section end-->
                                                    <div class="single-content animate-box" style="border:1px dotted black; padding:10px">
                                                        <p class="alith_post_except animate-box"><?php echo $row["news_description"]; ?></p>
                                                    </div>
                                                    <label class="btn btn-sm btn-info btn-edit"
                                                            data-id="<?php echo $row['id']; ?>"
                                                            data-title="<?php echo $row['news_title']; ?>"
                                                            data-author="<?php echo $row['page_author']; ?>"
                                                            data-description="<?php echo $row['news_description']; ?>"
                                                            <i class="fa fa-edit"></i> Edit
                                                    </label>
                                                    <!-- Edit Modal -->
                                                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editModalLabel">Edit News Post</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="editForm">
                                                                        <div class="mb-3">
                                                                            <label for="newsTitle" class="form-label">News Title</label>
                                                                            <input type="text" class="form-control rounded-2" id="newsTitle" name="newsTitle" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="authorName" class="form-label">Author</label>
                                                                            <input type="text" class="form-control rounded-2" id="authorName" name="authorName" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="newsContent" class="form-label">Content</label>
                                                                            <textarea class="form-control rounded-2" id="newsContent" name="newsContent" rows="3" required></textarea>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Edit Modal end-->
                                <?php 
                                            }
                                        }
                                    }else{
                                        echo "<hr>";
                                        echo "Result not found";
                                    }
                                ?>
                                                    <div class="single-content animate-box" style="border:1px dotted black; padding:10px; margin-top:10px">
                                                        <!-- Edit Button -->
                                                        <label class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#textEditorModal">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </label>
                                                        <?php
                                                            include 'includes/config.php';

                                                        $news_id = isset($_GET['id']) ? intval($_GET['id']) : null;

                                                        if ($news_id) {
                                                            $stmt = $db->prepare("SELECT news_content FROM news_posts WHERE id = ?");
                                                            $stmt->bind_param("i", $news_id);
                                                            $stmt->execute();
                                                            $stmt->bind_result($news_content);
                                                            $stmt->fetch();
                                                            $stmt->close();
                                                        } else {
                                                            $news_content = "No content available!"; 
                                                        }
                                                        ?>
                                                        <div class="text-editor-content" contenteditable="true">
                                                            <?= $news_content; ?>
                                                        </div>                                        
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="textEditorModal" tabindex="-1" aria-labelledby="textEditorModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content" style="background: #c9c9c9;color: #ffd6e7;">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="textEditorModalLabel">Aj Editor</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body" id="text-editor-modal">
                                                                    <form method="POST" action=" ">
                                                                        <div class="text-editor-container">
                                                                            <div class="text-editor-toolbar">
                                                                                <div class="text-editor-head">
                                                                                    <select class="animation" onchange="fileHandle(this.value); this.selectedIndex=0">
                                                                                        <option value="" selected="" hidden="" disabled="">File</option>
                                                                                        <option value="new">New file</option>
                                                                                        <option value="txt">Save as txt</option>
                                                                                        <option value="pdf">Save as pdf</option>
                                                                                    </select>
                                                                                    <select class="animation" onchange="formatDoc('formatBlock', this.value); this.selectedIndex=0;">
                                                                                        <option value="" selected="" hidden="" disabled="">Format</option>
                                                                                        <option value="h1">Heading 1</option>
                                                                                        <option value="h2">Heading 2</option>
                                                                                        <option value="h3">Heading 3</option>
                                                                                        <option value="h4">Heading 4</option>
                                                                                        <option value="h5">Heading 5</option>
                                                                                        <option value="h6">Heading 6</option>
                                                                                        <option value="p">Paragraph</option>
                                                                                    </select>
                                                                                    <select class="animation" onchange="formatDoc('fontSize', this.value); this.selectedIndex=0;">
                                                                                        <option value="" selected="" hidden="" disabled="">Font size</option>
                                                                                        <option value="1">Extra small</option>
                                                                                        <option value="2">Small</option>
                                                                                        <option value="3">Regular</option>
                                                                                        <option value="4">Medium</option>
                                                                                        <option value="5">Large</option>
                                                                                        <option value="6">Extra Large</option>
                                                                                        <option value="7">Big</option>
                                                                                    </select> 
                                                                                    <div class="color animation">
                                                                                        <span>Color</span>
                                                                                        <input type="color" oninput="formatDoc('foreColor', this.value); this.value='#000000';">
                                                                                    </div>
                                                                                    <div class="color animation">
                                                                                        <span>Background</span>
                                                                                        <input type="color" oninput="formatDoc('hiliteColor', this.value); this.value='#000000';">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="btn-toolbar">
                                                                                    <button type="button" onclick="formatDoc('undo')"><i class='bx bx-undo' ></i></button>
                                                                                    <button type="button" onclick="formatDoc('redo')"><i class='bx bx-redo' ></i></button>
                                                                                    <button type="button" onclick="formatDoc('bold')"><i class='bx bx-bold'></i></button>
                                                                                    <button type="button" onclick="formatDoc('underline')"><i class='bx bx-underline' ></i></button>
                                                                                    <button type="button" onclick="formatDoc('italic')"><i class='bx bx-italic' ></i></button>
                                                                                    <button type="button" onclick="formatDoc('strikeThrough')"><i class='bx bx-strikethrough' ></i></button>
                                                                                    <button type="button" onclick="formatDoc('justifyLeft')"><i class='bx bx-align-left' ></i></button>
                                                                                    <button type="button" onclick="formatDoc('justifyCenter')"><i class='bx bx-align-middle' ></i></button>
                                                                                    <button type="button" onclick="formatDoc('justifyRight')"><i class='bx bx-align-right' ></i></button>
                                                                                    <button type="button" onclick="formatDoc('justifyFull')"><i class='bx bx-align-justify' ></i></button>
                                                                                    <button type="button" onclick="formatDoc('insertOrderedList')"><i class='bx bx-list-ol' ></i></button>
                                                                                    <button type="button" onclick="formatDoc('insertUnorderedList')"><i class='bx bx-list-ul' ></i></button>
                                                                                    <button type="button" onclick="addLink()"><i class='bx bx-link' ></i></button>
                                                                                    <button type="button" onclick="formatDoc('unlink')"><i class='bx bx-unlink' ></i></button>
                                                                                    <button type="button" id="show-code" data-active="false">&lt;/&gt;</button>
                                                                                    <button type="button" onclick="document.getElementById('imageUpload').click()"><i class='bx bxs-image-add' ></i></button>
                                                                                    <input type="file" id="imageUpload" accept="image/*" style="display:none;" onchange="insertImage(this)">
                                                                                    <!-- New table button -->
                                                                                </div>
                                                                                <button type="button" class="aj-button" onclick="insertTable()"><i class="bx bx-table"></i> Table</button>
                                                                            </div>
                                                                            <input type="hidden" name="Cname" id="hiddenContent">
                                                                            <?php
                                                                                include 'includes/config.php'; 

                                                                            $news_id = isset($_GET['id']) ? intval($_GET['id']) : null;

                                                                            if ($news_id) {
                                                                                $stmt = $db->prepare("SELECT news_content FROM news_posts WHERE id = ?");
                                                                                $stmt->bind_param("i", $news_id);
                                                                                $stmt->execute();
                                                                                $stmt->bind_result($news_content);
                                                                                $stmt->fetch();
                                                                                $stmt->close();
                                                                            } else {
                                                                                $news_content = "No content available!"; 
                                                                            }
                                                                            ?>
                                                                            <div id="text-editor-content" contenteditable="true" name="Cname">
                                                                                <?= $news_content; ?>
                                                                            </div>
                                                                            <input type="hidden" id="ajEditorId" value="">
                                                                            <input type="submit" class="btn btn-primary m-2" value="Submit" onclick="ajTextEditor()">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal end-->
                                                </div>
                                    </article>
                                    <div class="single-more-articles single-disable-inview">
                                        <h4><span>196 edit_news_post You might be interested in</span></h4>
                                        <span class="single-more-articles-close-button"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        <div class="latest_style_2">
                                            <div class="latest_style_2_item">
                                                <figure class="alith_news_img"><a href='/single'><img class="hover_grey" src="<?=BASE_URL?>web/images/thumb-square.png" alt=""></a></figure>
                                                <h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam</a></h3>
                                            </div>
                                            <div class="latest_style_2_item">
                                                <figure class="alith_news_img"><a href='/single'><img class="hover_grey" src="<?=BASE_URL?>web/images/thumb-square.png" alt=""></a></figure>
                                                <h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam</a></h3>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>