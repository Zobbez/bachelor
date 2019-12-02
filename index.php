

<?php  

// header, navigation and db included
include "includes/db.php";
include "includes/header.php";
include "includes/navigation.php";
?>



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <?php
                 // query to select all from posts
                 $query = "SELECT * FROM posts";
                 // pass the db connection and the query.
                 $selectAllPostsQuery = mysqli_query($connection, $query);
                 // to display the categories, a while loop is used. fecth the result of the query.
                 while($row = mysqli_fetch_assoc($selectAllPostsQuery)) {
                 // the data comes in an assosiative array and the row from the database, and it can used to echo out the info.        
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
                        
                ?>

                        <h1 class="page-header">
                                    Page Heading
                            <small>Secondary Text</small>
                        </h1>

                        <!-- Blog Post -->
                        <h2>
                            <a href="#"><?php echo $post_title; ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?php echo $post_author; ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                        <hr>
                        <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                        <hr>
                        <p> <?php echo $post_content; ?> </p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>


                <?php } ?>


               


             



            </div>

            <?php  include "includes/sidebar.php";  ?>

        </div>
        <!-- /.row -->

        <hr>

<?php 
       
include "includes/footer.php";

?>