<?php
global $topics;
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
    $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Blog</title>
    <style>
        h1{text-align: left;}
        h2{text-align: center; font-size: 35px;}
        p{text-align: left;}
        .footer{
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
<h2>About this Website</h2><br>
<p>
    Welcome to my blog!<br>Here, you will find a space where I share my thoughts, ideas, and experiences on a variety of topics.
    As a writer and content creator, I am passionate about exploring different subjects and expressing my opinions through the written word.
    In this blog, I aim to create a community where readers can engage with my content and share their own perspectives.
    I believe that discussion and exchange of ideas are crucial for personal growth and understanding of the world around us.
    I am a firm believer in the power of self-improvement, and I strive to help others reach their full potential through my writing.
    I share tips, tricks, and advice on various topics such as time management, goal-setting, mindfulness, and productivity.
    I also write about a wide range of other subjects.
    <br>
    From travel and culture to technology and politics, I cover a diverse range of topics that reflect my curiosity about the world.
    Finally, I want to thank you for taking the time to visit my blog.
    Your support and engagement mean the world to me, and I am excited to continue sharing my ideas and insights with you.
    So, sit back, relax, and enjoy the journey with me!
</p>
<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Custom Script -->
<script src="assets/js/scripts.js"></script>



</body>

</html>