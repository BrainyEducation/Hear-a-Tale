<fieldset>
    <legend>
        <div style="display:inline-block;"> <a href="<?php echo $thisPage; ?>"><?php echo $title; ?></a> </div>
        <h6 style="display:inline-block;"><div class="letterPicker">
            <?php
                $letters = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
                foreach($letters as $letter){
                    if($currentLetter == $letter){
                        echo $letter;
                    } else{
                        echo "<a href='" . $thisPage . (strpos($thisPage, "?") == 0 ? "?" : "&") . "letter=" . $letter . "'>" . $letter . "</a>";
                    }
                    if($letter != "Z") echo " · ";
                }
            ?>
        </div></h6>
    </legend>

</fieldset>


<?php
$workData = array();
$authors = array();
foreach($catData as $work){
    if($work['Author'] == "" || is_null($work['Author'])) continue;
    if(!in_array($work['Author'], $authors)){
        if($currentLetter == "" || strpos($work['Author'], $currentLetter) === 0){
            array_push($workData, $work);
            array_push($authors, $work['Author']);
        }

    }
}
if(count($workData) === 0){
    if($currentLetter != "") echo "There are no authors under <i>" . $currentLetter . "</i>.";
    else echo "There are no works or authors in this category.";
}
foreach($workData as $authorWork){

    ?>

    <div class="authorCard">
        <a href="ADULT_author.php?author=<?php echo $authorWork['Author']; ?>">
            <img src="Thumbnails/<?php echo $authorWork['ThumbnailImage']; ?>">
        </a>
        <div class="authorInfo">
        <h4 class="authorName">
            <a href="ADULT_author.php?author=<?php echo $authorWork['Author']; ?>">
                <?php echo $authorWork['Author'] ?>
            </a>
        </h4>
        <div class="authorWorks" dir="rtl" style="max-height:105px; width:110%; overflow:auto;">
        <div dir="ltr">
        <?php
            $works = getAllByAuthorOutOfPool($authorWork['Author'], $catData);
            $showAllAll = 0;
            if($showAllAll) shuffle($works);
            for($i = 0; $i <= ($showAllAll == 1 ? min(2, count($works)) : count($works)); $i++){
                $work = $works[$i];
                echo "<p class='authorWork'><a href='ADULT_viewer.php?url=" . $work['FileLocation'] . "'><i>" . $work['Title'] . "</i></a></p>";
            }
        ?>
        </div>
        </div>

    </div>
    </div>
    <div style="clear: both;"></div>

<?php
}
echo "";

?>
