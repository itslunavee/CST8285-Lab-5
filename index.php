<?php
// define array
$genres = array("action", "adventure", "comedy", "drama");
$subjects = array("Animation", "Children and Youth", "People");
$MainDirectors = array("Roger Allers", "Steven Spielberg", "James Cameron", "Christopher Nolan", "Hayao Miyazaki");

// generate options from the array
function generateOptions($array) {
    $options = "";
    foreach ($array as $value) {
        $options .= "<option>$value</option>";
    }
    return $options;
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Chapter 12</title>    
    
    <link rel="stylesheet" href="css/styles1.css" />
   

</head>
<body>
<?php include 'headerM.php'; ?>

    
<main>
<form class="form" method="post" action="process.php" id="mainForm">
   <fieldset class="form__panel">
      <legend class="form__heading">Edit Movie Details</legend>
        <p class="form__row">
           <label>Title</label><br/>
           <input type="text" name="title" class="form__input form__input--large"/>
       </p>
       <p class="form__row">
           <label>Description</label><br/>
           <input type="text" name="description" class="form__input form__input--large">
       </p>            
       <p class="form__row"> 
           <label>Genre</label><br/>
           <select name="genre" class="form__input form__select">
              <option>Choose genre</option> 
              <?php echo generateOptions($genres); ?>
           </select>
       </p>
       <p class="form__row"> 
           <label>Subject</label><br/>
           <select name="subject" class="form__input form__select">
              <option>Choose subject</option> 
              <?php echo generateOptions($subjects); ?>
           </select>
       </p>
       <p class="form__row">	
           <label>Star</label><br/>               
           <input type="text" name="Star" class="form__input form__input--medium" />
       </p>
	   
	  
	  
       <p class="form__row">	
           <label>Year</label><br/>               
           <input type="text" name="year" class="form__input form__input--small" />
       </p>  
       <p class="form__row">	
           <label>Production</label><br/>               
           <input type="text" name="Production" class="form__input form__input--medium"/>
       </p>  
		<p class="form__row"> 
           <label>Main Director</label><br/>
           <select name="director" class="form__input form__select">
              <option>Choose Main Director</option> 
              <?php echo generateOptions($MainDirectors); ?>
           </select>
       </p>	   

       <div class="form__box"> 
          <input type="submit" class="form__btn"> <input type="reset" value="Clear Form" class="form__btn">      
       </div>
   </fieldset>
</form>
</main> 
<?php include 'footerM.php'; ?>     
</body>
</html>


