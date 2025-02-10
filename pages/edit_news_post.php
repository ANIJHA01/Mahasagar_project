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
                                                        <label class="btn btn-sm btn-info">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </label>
                                                        <div class="dropcap column-2 animate-box">
                                                            <p>The lemming hello and hence leapt hello more otter aerially or dear monkey much illustrative bled showed crud fox yikes but spelled far onto nudged some frog and bluebird one surreptitiously ground frenetically much far up rewrote this.</p>
                                                            <p>And far hey much hello and bashful one save less much goldfish analogically rabbit more hello threw thanks therefore truthful unproductive strenuously <strong>concentric repaid</strong> manifestly and oh between the one jeez and hit terrier dense unwittingly shark versus inscrutably that much fit involuntary a endearingly.</p>
                                                            <p> <img alt="" src="https://cc-prod.scene7.com/is/image/CCProdAuthor/d-03-4?$pjpeg$&jpegSize=200&wid=720"></p>
                                                            <p>Knew opposite sped hey insect wow interminable telepathic far oh this to one goldfinch some under chose attractively a<em> yet clenched one less prodigious amenably far one inset much much that hound gosh goodness articulate</em> spitefully ape repeatedly yikes that drooled glumly some romantic lion far far wow woolly a some one meant self-consciously pangolin poorly until a dizzily morbid house.</p>
                                                            <p>Pellentesque neque nulla cubilia enim consequat eleifend, taciti nec aenean vehicula congue dolor etiam, ornare morbi class tristique quisque mattis augue tempus semper venenatis donec ipsum cras dapibus elit, ut fusce rhoncus senectus sit lectus tristique cursus convallis</p>
                                                            <p>Vivamus hac faucibus primis eleifend ligula curabitur phasellus augue, quisque rhoncus purus quam per felis rhoncus viverra bibendum, habitasse sem turpis fermentum morbi ut diam elit vestibulum consectetur suscipit pellentesque commodo dictumst potenti gravida libero donec in, non tristique orci habitant ipsum diam himenaeos</p>
                                                            <p>Ouch much until in ahead until much scallop obliquely expansive experimentally daintily more regardless wherever conjointly overslept elegant then wow extrinsically irrespective imminently and ladybug cynic hawk between a guffawed as coaxingly strictly blubbered meant much pending overheard and eagle meanly jeez untiring jeez past well far realistic on mounted a by.</p>
                                                            <p>Frtuitous spluttered unlike ouch vivid blinked far inside under far the wild one wasp nightingale spluttered wide otter crud lemming aside about and python until.</p>
                                                            <p>Against and lantern where a and gnashed nefarious far rigorous cheerfully much far owing funny lusty cantankerous<a href="#"> until much</a> dire some deliberate close condescendingly tarantula angelfish glum shut a dipped wow that jeepers much and shut discarded this.</p>
                                                            <p>Ouch oh alas crud unnecessary invaluable some goodness opposite hello since audacious far <em>barring and</em> absurdly much boa until read porpoise grouped the scooped the lied save minutely gosh much this outside and much snorted dear eel resold callously flinched smoothly.</p>
                                                            <h2>Sample Heading</h2>
                                                            <p>Close unthinking darn as darn between naked beyond seriously guiltily chameleon and that fish lent alas spuriously winced and shuddered unlocked more some gosh darn the trustfully talkative goodness indubitably single-mindedly ouch astride.</p>
                                                            <p>Freshly turtle took toward more much notably fearlessly resolutely tastefully thus far some hello amazingly well overthrew far youthfully where stiffly below mongoose ordered dizzy the some far cosmetically much cuddled far oh this much darn one much much cuckoo ungracefully underneath because snarling less.</p>
                                                        </div>                                              
                                                    </div>
                                                </div>
                                    </article>
                                    <div class="single-more-articles single-disable-inview">
                                        <h4><span>You might be interested in</span></h4>
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