<?php
include 'headerM.php';
?>

<main>
    <h2>Movie Information Saved</h2>
    
    <div class="movie-info">
        <p><strong>Title</strong> <?php echo $_POST['title']; ?></p>
        <p><strong>Description</strong> <?php echo $_POST['description']; ?></p>
        <p><strong>Genre</strong> <?php echo $_POST['genre']; ?></p>
        <p><strong>Subject</strong> <?php echo $_POST['subject']; ?></p>
        <p><strong>Star</strong> <?php echo $_POST['Star']; ?></p>
        <p><strong>Year</strong> <?php echo $_POST['year']; ?></p>
        <p><strong>Production</strong> <?php echo $_POST['Production']; ?></p>
        <p><strong>Main Director:</strong> <?php echo $_POST['director']; ?></p>
    </div>
</main>

<?php
include 'footerM.php';
?>