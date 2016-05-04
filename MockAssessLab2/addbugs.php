<!DOCTYPE html>
2 <html lang="en">
3 <head>
    4     <meta charset="UTF-8">
    5     <title>Add Bug Page</title>
    6     <link rel="stylesheet" type="text/css" href="../Task1/style.css">
    7     <link rel="stylesheet" href=../Task1/unsemantic-grid-responsive-tablet.css>
    8

    9 </head>
10

11 <body>
12 <main class="grid-container">
    13

    14     <header class="grid-100">
        15         <img src="../Task1/logo.png" id="logo"/>
        16

        17         <h1> <strong> BugTracker </strong></h1>
        18

        19         <h3> Keeping track of all the pesky little bugs </h3>
        20     </header>
    21

    22     <aside class="grid-33 mobile-grid-66">
        23         <nav>
            24             <ul>
                25

                26                 <li><a href="showbugs.php"> All Bug Items </a></li>
                27                 <li><a href="showbugs.php?BugCategory=Android"> Android Bugs </a></li>
                28                 <li><a href="showbugs.php?BugCategory=iOS"> iOS Bugs </a></li>
                29                 <li><a href="showbugs.php?BugCategory=Windows"> Windows Bugs </a></li>
                30                 <li><a href="addbugs.php"> Insert Bug </a></li>
                31             </ul>
            32         </nav>
        33     </aside>
    34

    35

    36

    37

    38     <section class="grid-66 mobile-grid-66">
        39         <?php
        40         include("dbConnect.php");
41         if($_SERVER['REQUEST_METHOD']==='GET'){
            42             ?>
            43

            44             <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method ="post">
                45

                46             <label>Bug Name <input id="bugname" type="text" name="bugName" required></label>
                47             <br>
                48             <br>
                49                 <label> Bug Category
                    50                 <select name="BugCategory" required>
                        51                     <option value=" " selected disabled>Select </option>
                        52                     <option value="Android ">Android</option>
                        53                     <option value="iOS">iOS</option>
                        54                     <option value="Windows">Windows</option>
                        55                 </select>
                    56                 </label>
                57                 <br>
                58                 <br>
                59

                60             <label> Bug Summary  <textarea rows="8" cols="50" name="BugSummary" required> </textarea> </label>
                61             <br>
                62

                63             <input type="submit" value="Submit">
                64

                65         </form>
            66             <?php
            67
68  
69  
70         }elseif($_SERVER['REQUEST_METHOD']==='POST') {
            71
72  
73             $bugName = $_POST['bugName']; 
74             $BugCategory = $_POST['BugCategory']; 
75             $BugSummary = $_POST['BugSummary']; 
76  
77  
78             $bug_SQLinsert = "INSERT INTO bugs (bugName,BugCategory,BugSummary) 
79                               VALUES ('$bugName', '$BugCategory', '$BugSummary');"; 
80  
81  
82             if (mysqli_query($db, $bug_SQLinsert)) {
                83
                header("location:showbugs.phplab");} else {
                86                 echo "Failed to add new bug";
            }
        }
        else{
            91            ("location:index.phplab");
       }
 ?>
        98

        99

        100     </section>
    101

    102

    103

    104 </main>
105

106

107

108

109 <footer class="footer">
    110     <p> Designed by Wale Patrick 2016(c) </p>
    111 </footer>
112

113 </body>
114 </html> 
