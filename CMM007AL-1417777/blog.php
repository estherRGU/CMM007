<?php
?>
/**
 * Created by PhpStorm.
 * User: 1417777
 * Date: 04/05/2016
 * Time: 11:30
 */
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Blog Entry</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href=unsemantic-grid-responsive-tablet.css>


</head>
<body>
<main class="grid-container">

    <!-- START OF HEADER -->
    <header class="grid-100">
        <h1><strong> myBlog </strong></h1>
        <h3> because the internet needs to know what I think </h3>

        <nav>
            <ul>
                <li><a href="blog.html"> All Blog Items </a></li>
                <li><a href="blog.html"> Work Blog Items </a></li>
                <li><a href="blog.html"> University Blog Items </a></li>
                <li><a href="blog.html"> Family Blog Items </a></li>
                <li><a href="add.html"> Insert Blog Items </a></li>
            </ul>
        </nav>
        <?
                 $category = $_GET['category'];

         if(isset($_GET['category'])){

             $category = $_GET['category'];

             echo "<h4 align='center'>  You are in the $category </h4>";


         }else{

             echo '<h4 align="center"> ALL DATA ENTRY FROM <SPAN style="color: chartreuse"> MY BLOG - LOGS </SPAN>  </h4>';
         }

        ?>




             </header>








         <?php
         include("connection.php");

     ?>


         <section class="grid-66 mobile-grid-66">


                 <?php



        if(isset($_GET['category'])){

             $category = $_GET['category'];

           $blogview_SQLselect = "  SELECT *
                                    FROM blogview
                                    WHERE category = '$category' ";

            }else {


             $blogview_SQLselect = "  SELECT * FROM blogview ";

         }

             $blogview_SQLselect_Query = mysqli_query($db, $blogview_SQLselect);

            $indx = 1;
             while ($row = mysqli_fetch_array($blogview_SQLselect_Query, MYSQLI_ASSOC)) {
                             $entryTitle = $row['entryTitle'];
                 $entrySummary = $row['entrySummary'];
                 $category = $row['category'];
                 $submitter = $row['submitter'];


                 echo " <h3> " . "[" . $entryTitle . "]" . " by " . " $submitter " . " </h3>";

                 echo '<br>';

                 echo $category;
                echo '<br>';
                 echo '<br>';

                 echo $entrySummary;


                 echo ' <hr>';


                 $indx++;
             }

             mysqli_free_result($blogview_SQLselect_Query);
?>

            </section>

</main>


<footer id="footer">

</footer>
<p> Designed by [Esther Koloh, [2016]</p>
</body>
</html>