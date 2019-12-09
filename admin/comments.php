<?php 
include "includes/header.php";

?>


<div id="wrapper">

<?php  
include "includes/navigation.php";

?>

<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">

<h1 class="page-header">
    Welcome to Admin
<small>Author name</small>
</h1>

<?php 

//check if the GET request source is available 
if(isset($_GET['source'])){
// if it is set it is a variable called source
$source = $_GET['source']; 

} else {

    $source = '';

}
//if source is equal to different cases to display different things
switch($source) {

case 'add-post';
include "includes/add-post.php";
break;

case 'edit-post';
include "includes/edit-post.php";
break;

// set the defualt to show all the posts
default:
include "includes/view-all-comments.php";
break;





}








?>




                      
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   
<?php 
include "includes/footer.php";

?>