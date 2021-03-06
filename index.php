

<?php  

// header, navigation and db included
include "includes/db.php";
include "includes/header.php";
include "includes/navigation.php";
//session_start();
?>



<!----------------------------------------- Page Content -------------------------------------->
    <div class="container">

        <div class="row">

<!----------------------------------------- All Posts Column ---------------------------------->
            <div class="col-md-8 white"">

                <?php

                // query to select all from posts in descending order so show the highest id first = highest id would mean the newest post.
                    $query = "SELECT * FROM posts ORDER BY post_id DESC ";
                // pass the db connection and the query.
                    $selectAllPostsQuery = mysqli_query($connection, $query);
                // to display the posts, a while loop is used. fecth the result of the query.
                    while($row = mysqli_fetch_assoc($selectAllPostsQuery)) {
                // the data comes in an assosiative array and the row from the database, and it can used to echo out the info.        
                    $postId = $row['post_id'];
                    $postTitle = $row['post_title'];
                    $postAuthor = $row['post_author'];
                    $postDate = $row['post_date'];
                    $postImage = $row['post_image'];
                // function to limit the content show on the index.
                    $postContent = substr($row['post_content'],0, 30);
                    $postStatus = $row['post_status'];

                        if ($postStatus !== 'published') {
                            echo "";

                        } else {
                        
                ?>


<!---------------------------------------  Post Structure on home -------------------------------->
                        <h1 class="page-header">
                        <a class="title" href="post.php?p_id=<?php echo $postId ?>"><?php echo $postTitle; ?></a>
                            <small>by <?php echo $postAuthor; ?> <span style="font-size: 12px" class="glyphicon glyphicon-time"></span> <span style="font-size: 12px"><?php echo $postDate; ?></span> </small>
                        </h1>

                        <a href="post.php?p_id=<?php echo $postId ?>"> <img class="img-responsive" src="images/<?php echo $postImage; ?>" alt=""> </a>
                    
                        <p> <?php echo $postContent; ?> </p>
                        

                        <hr>


                <?php } } ?>

            </div>

        <span style="position:-webkit-sticky; position:sticky; top:65px;"><?php  include "includes/sidebar.php";  ?> </span>    

        </div>
       

<?php 
       
include "includes/footer.php";

?>
