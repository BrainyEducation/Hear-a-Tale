<?php

//Function to fetch data from a Google Spreadsheet
function loadData() {
    //Where your data be? This link is obtained from PUBLISHING a spreadsheet; Be sure to change output to =csv
    $url = "https://docs.google.com/spreadsheet/pub?key=0AmFA7YADCNxodHNHdWpVN1IxcGFtdG1wYVFZMjk4THc&output=csv";
    //We're going to save data to a session variable to lessen stress on servers. Let's setup the array ahead of time
    $_SESSION['matrix'] = array();
    //Open the URL for reading
    $file = fopen($url, 'r');
    //In honor of Seasme Street's Count von Count (One, AHAHAHAH)
    $count = 0;
    //Loop through the spreadsheet line by line, technically we have a max line limit of 1000 characters, shouldn't need anymore, loop until you can't
    while (($data = fgetcsv($file, "1000", ",")) != false) {
        //To handle header rows. These are going to be ignored in processing. You can remove the if statement  if you need headers for some reason.
        if ($count > 1) {
            //fgetcsv already returns an array, so we are just setting our incremental array to the values it returns, setting the element's name to the first element returned
            $_SESSION['matrix'][$data[0]] = $data;
            //Unset the 0 element of our session array, since that is represented in the element's name
            unset($_SESSION['matrix'][$data[0]][0]);
        }
        //Increment your incrementor, could technically be re-written without a counter, but if it ain't broke....
        $count++;
    }
    //Close your resource so we aren't greedy and keep everything to ourselves
    fclose($file);
}

//Kari's idea.
function displayTiles($section, $check, $type) {
    $count = 1;
    $result = array_values($_SESSION['matrix']);
    $max = count($result);

    $randArray = array();

    while ($count <= 10) {
        $authorMatch = false;
        $rand = rand(1, $max);
        if (strtolower($result[$rand][$check]) == strtolower($section)) {

            //Commented because we aren't listing individual stories in anything but children
//            if ($result[$rand][3] != "") {
//                $found = false;
//                while ($found == false) {
//                    $tempRand = $rand - 1;
//                    if ($result[$rand][2] == $result[$tempRand][2]) {
//                        $rand--;
//                    } else {
//                        $found = true;
//                    }
//                }
//            }
            if ($type == "author") {
                foreach ($randArray as $item) {
                    if ($result[$rand][1] == $result[$item][1]) {
                        $authorMatch = true;
                    }
                }
            }
            if (!in_array($rand, $randArray) && $authorMatch == false) {
                $randArray[] = $rand;
                ?>
                <div style="float: left; width: 100px; text-align: center; padding: 3px;">
                    <?php
                    $img = str_replace("\\", "/", $result[$rand][5]);
                    if ($type != "author") {
                        ?>
                        <a href="javascript:void(0);" onclick="openDialog('<?php echo $result[$rand][4]; ?>', '<?php echo utf8_decode(htmlentities(addslashes($result[$rand][2]))); ?>', <?php echo $rand + 1; ?>);">
                            <?php
                        } else {
                            ?>
                            <a href="workslist.php?author=<?php echo $result[$rand][1]; ?>">
                                <?php
                            }
                            ?>
                            <img src="/Thumbnails/<?php echo ($img == "" ? 'default.jpg' : $img); ?>" width="75px" height="100px" alt="<?php echo $result[$rand][2]; ?>" />
                            <br />
                            <?php echo ($type == "author" ? $result[$rand][1] : utf8_decode(htmlentities($result[$rand][2]))); ?>
                        </a>
                </div>

                <?php
                if ($count % 5 == 0) {
                    ?>
                    <div style="clear: both;"></div>

                    <?php
                }
                $count++;
            }
        }
    }
}

function displayChildrens($section) {
    $storyArray = array();
    $durationArray = array();
    $count = 1;
    foreach ($_SESSION['matrix'] as $key => $audio) {
        if ($audio[5] != "") {
            $img = str_replace("\\", "/", $audio[5]);
        } else {
            $img = "default.jpg";
        }
        if (strtolower($audio[6]) == "children") {
            if (!in_array($audio[7], $storyArray)) {
                $storyArray[] = $audio[7];
                $storyArray[$audio[7]] = array();
                if ($section == "") {
                    if ($count > 1) {
                        echo '</div>' . PHP_EOL;
                        echo '</div>' . PHP_EOL;
                        echo '</div>' . PHP_EOL;
                    }
                    echo '<div class="acc-group default-style">' . PHP_EOL;
                    echo '<button data-toggle="collapse" data-target="#acc' . $count . '" class="collapsed"><h2>' . $audio[7] . '</h2></button>' . PHP_EOL;
                    echo '<div id="acc' . $count . '" class="collapse in">' . PHP_EOL;
                    echo '<div class="content">' . PHP_EOL;
                    $count++;
                }
                if (!in_array($audio[8], $storyArray[$audio[7]])) {
                    $storyArray[$audio[7]][] = $audio[8];
                    if ($section == "" || $section == $audio[8]) {
                        echo '<h4><a href="workslist.php?section=' . $audio[8] . '">' . $audio[8] . '</a></h4>' . PHP_EOL;
                    }
                    if ($section != "" && $section == $audio[8]) {
                        echo '<div style="padding: 5px;">' . PHP_EOL;
                        echo '<img src="/Thumbnails/' . $img . '" alt="' . utf8_decode(htmlentities($audio[4])) . '" />' . PHP_EOL;
                        echo '<a href="javascript:void(0);" onclick="openDialog(\'' . $audio[4] . '\', \'' . utf8_decode(htmlentities(addslashes($audio[2]))) . '\',' . $key . ');">' . utf8_decode(htmlentities($audio[2])) . '</a><br />' . PHP_EOL;
                        echo '</div>' . PHP_EOL;
                    } elseif ($section == "stories by length" && $audio[10] != "") {
                        $durationArray[$key] = strtotime($audio[10]);
                    }
                    if ($section == "" && strtolower($audio[8]) == "stories alphabetically") {
                        echo '<h4><a href="workslist.php?section=stories by length">Stories by Length</a></h4>' . PHP_EOL;
                    }
                } else {
                    if ($section != "" && $section == $audio[8]) {
                        echo '<div style="padding: 5px;">' . PHP_EOL;
                        echo '<img src="/Thumbnails/' . $img . '" alt="' . utf8_decode(htmlentities($audio[4])) . '" />' . PHP_EOL;
                        echo '<a href="javascript:void(0);" onclick="openDialog(\'' . $audio[4] . '\', \'' . utf8_decode(htmlentities(addslashes($audio[2]))) . '\',' . $key . ');">' . utf8_decode(htmlentities($audio[2])) . '</a><br />' . PHP_EOL;
                        echo '</div>' . PHP_EOL;
                    } elseif ($section == "stories by length" && $audio[10] != "") {
                        $durationArray[$key] = strtotime($audio[10]);
                    }
                }
            } else {
                if (!in_array($audio[8], $storyArray[$audio[7]])) {
                    $storyArray[$audio[7]][] = $audio[8];
                    if ($section == "" || $section == $audio[8]) {
                        echo '<h4><a href="workslist.php?section=' . $audio[8] . '">' . $audio[8] . '</a></h4>' . PHP_EOL;
                    }
                    if ($section != "" && $section == $audio[8]) {
                        echo '<div style="padding: 5px;">' . PHP_EOL;
                        echo '<img src="/Thumbnails/' . $img . '" alt="' . utf8_decode(htmlentities($audio[4])) . '" />' . PHP_EOL;
                        echo '<a href="javascript:void(0);" onclick="openDialog(\'' . $audio[4] . '\', \'' . utf8_decode(htmlentities(addslashes($audio[2]))) . '\',' . $key . ');">' . utf8_decode(htmlentities($audio[2])) . '</a><br />' . PHP_EOL;
                        echo '</div>' . PHP_EOL;
                    } elseif ($section == "stories by length" && $audio[10] != "") {
                        $durationArray[$key] = strtotime($audio[10]);
                    }
                    if ($section == "" && strtolower($audio[8]) == "stories alphabetically") {
                        echo '<h4><a href="workslist.php?section=stories by length">Stories by Length</a></h4>' . PHP_EOL;
                    }
                } else {
                    if ($section != "" && $section == $audio[8]) {
                        echo '<div style="padding: 5px;">' . PHP_EOL;
                        echo '<img src="/Thumbnails/' . $img . '" alt="' . utf8_decode(htmlentities($audio[4])) . '" />' . PHP_EOL;
                        echo '<a href="javascript:void(0);" onclick="openDialog(\'' . $audio[4] . '\', \'' . utf8_decode(htmlentities(addslashes($audio[2]))) . '\',' . $key . ');">' . utf8_decode(htmlentities($audio[2])) . '</a><br />' . PHP_EOL;
                        echo '</div>' . PHP_EOL;
                    } elseif ($section == "stories by length" && $audio[10] != "") {
                        $durationArray[$key] = strtotime($audio[10]);
                    }
                }
            }
        }
    }
    if (count($durationArray) > 1) {
        asort($durationArray);
        echo '<h4>Stories by Length</h4>' . PHP_EOL;
        foreach ($durationArray as $key => $item) {
            echo '<div style="padding: 5px;">' . PHP_EOL;
            echo '<img src="/Thumbnails/' . $_SESSION['matrix'][$key][5] . '" alt="' . utf8_decode(htmlentities($_SESSION['matrix'][$key][4])) . '" />' . PHP_EOL;
            echo '<a href="javascript:void(0);" onclick="openDialog(\'' . $_SESSION['matrix'][$key][4] . '\', \'' . utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$key][2]))) . '\',' . $key . ', true);">' . utf8_decode(htmlentities($_SESSION['matrix'][$key][2])) . '</a><br />' . PHP_EOL;
            echo '</div>' . PHP_EOL;
            $_SESSION['duration'][] = $key;
        }
    }
}

function listAuthors() {
    $count = 1;
    $authorArray = array();
    foreach ($_SESSION['matrix'] as $audio) {
        $img = str_replace("\\", "/", $audio[5]);
        if (strtolower($audio[6]) == 'students and adults') {
            if (!in_array($audio[1], $authorArray)) {
                $authorArray[] = $audio[1];
                if ($count % 2 != 0) {
                    echo '<div style="padding: 5px; min-width: 300px; float: left;">' . PHP_EOL;
                } else {
                    echo '<div style="padding: 5px; min-width: 300px;">' . PHP_EOL;
                }

                echo '<img src="/Thumbnails/' . $img . '" alt="' . utf8_decode(htmlentities($audio[4])) . '" width="74px" />' . PHP_EOL;
                echo '<a href="workslist.php?author=' . $audio[1] . '">' . $audio[1] . '</a></div>' . PHP_EOL;
                if ($count % 2 == 0) {
                    echo '<div style="clear: both;"></div>' . PHP_EOL;
                }
                $count++;
            }
        }
    }
}

function listWorks($author) {
    $storyArray = array();
    $storyArray['fiction: books'] = array();
    $storyArray['fiction: stories'] = array();
    $storyArray['poetry'] = array();
    $storyArray['nonfiction'] = array();
    $storyArray['contemporary southern writers'] = array();
    $storyArray['works'] = array();

    $bioDisplayed = false;
    foreach ($_SESSION['matrix'] as $key => $audio) {
        $img = str_replace("\\", "/", $audio[5]);
        if (trim(strtolower($audio[1])) == trim(strtolower($author))) {
            if ($bioDisplayed == false) {
                echo '<h1>' . $audio[1] . '</h1><br />' . PHP_EOL;
                echo '<div style="float: left; padding: 5px;">' . PHP_EOL;
                echo '<img src="/Thumbnails/' . $img . '" alt="' . $audio[1] . '" />' . PHP_EOL;
                echo '</div>' . PHP_EOL;
                if ($audio[11] != "") {
                    echo '<p>' . $audio[11] . '</p>' . PHP_EOL;
                }
                echo '<div style="clear: both;"></div>' . PHP_EOL;
                echo '<h3>Works</h3><hr />' . PHP_EOL;
                $bioDisplayed = true;
            }
            if (strtolower($audio[8]) == "fiction: books") {
                if (!in_array($key, $storyArray['fiction: books'])) {
                    $storyArray['fiction: books'][] = $key;
                }
            } elseif (strtolower($audio[8]) == "fiction: stories") {
                if (!in_array($key, $storyArray['fiction: stories'])) {
                    $storyArray['fiction: stories'][] = $key;
                }
            } elseif (strtolower($audio[8]) == "poetry") {
                if (!in_array($key, $storyArray['poetry'])) {
                    $storyArray['poetry'][] = $key;
                }
            } elseif (strtolower($audio[8]) == "nonfiction") {
                if (!in_array($key, $storyArray['nonfiction'])) {
                    $storyArray['nonfiction'][] = $key;
                }
            } else {
                if (!in_array($key, $storyArray['works'])) {
                    $storyArray['works'][] = $key;
                }
            }
        }
    }
    if (count($storyArray['works']) > 0) {
        foreach ($storyArray['works'] as $key) {
            echo '<a href="javascript:void(0);" onclick="openDialog(\'' . $_SESSION['matrix'][$key][4] . '\', \'' . utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$key][2]))) . '\',' . $key . ');">' . utf8_decode(htmlentities($_SESSION['matrix'][$key][2])) . ($_SESSION['matrix'][$key][3] != "" ? ', ' . $_SESSION['matrix'][$key][3] : "") . '</a><br />' . PHP_EOL;
        }
    }
    if (count($storyArray['fiction: books']) > 0) {
        echo '<h4>Fiction: Books</h4>' . PHP_EOL;
        foreach ($storyArray['fiction: books'] as $key) {
            echo '<a href="javascript:void(0);" onclick="openDialog(\'' . $_SESSION['matrix'][$key][4] . '\', \'' . utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$key][2]))) . '\',' . $key . ');">' . utf8_decode(htmlentities($_SESSION['matrix'][$key][2])) . ($_SESSION['matrix'][$key][3] != "" ? ', ' . $_SESSION['matrix'][$key][3] : "") . '</a><br />' . PHP_EOL;
        }
    }
    if (count($storyArray['fiction: stories']) > 0) {
        echo '<h4>Fiction: Stories</h4>' . PHP_EOL;
        foreach ($storyArray['fiction: stories'] as $key) {
            echo '<a href="javascript:void(0);" onclick="openDialog(\'' . $_SESSION['matrix'][$key][4] . '\', \'' . utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$key][2]))) . '\',' . $key . ');">' . utf8_decode(htmlentities($_SESSION['matrix'][$key][2])) . ($_SESSION['matrix'][$key][3] != "" ? ', ' . $_SESSION['matrix'][$key][3] : "") . '</a><br />' . PHP_EOL;
        }
    }
    if (count($storyArray['poetry']) > 0) {
        echo '<h4>Poetry</h4>' . PHP_EOL;
        foreach ($storyArray['poetry'] as $key) {
            echo '<a href="javascript:void(0);" onclick="openDialog(\'' . $_SESSION['matrix'][$key][4] . '\', \'' . utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$key][2]))) . '\',' . $key . ');">' . utf8_decode(htmlentities($_SESSION['matrix'][$key][2])) . ($_SESSION['matrix'][$key][3] != "" ? ', ' . $_SESSION['matrix'][$key][3] : "") . '</a><br />' . PHP_EOL;
        }
    }
    if (count($storyArray['nonfiction']) > 0) {
        echo '<h4>Non-fiction</h4>' . PHP_EOL;
        foreach ($storyArray['nonfiction'] as $key) {
            echo '<a href="javascript:void(0);" onclick="openDialog(\'' . $_SESSION['matrix'][$key][4] . '\', \'' . utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$key][2]))) . '\',' . $key . ');">' . utf8_decode(htmlentities($_SESSION['matrix'][$key][2])) . ($_SESSION['matrix'][$key][3] != "" ? ', ' . $_SESSION['matrix'][$key][3] : "") . '</a><br />' . PHP_EOL;
        }
    }
}

function listSouthern() {
    $storyArray = array();
    $storyArray['fiction: books'] = array();
    $storyArray['fiction: stories'] = array();
    $storyArray['poetry'] = array();
    $storyArray['nonfiction'] = array();
    $storyArray['contemporary southern writers'] = array();

    foreach ($_SESSION['matrix'] as $audio) {
        if (strtolower($audio[7]) == "southern literature") {
            if (strtolower($audio[8]) == "fiction: books") {
                if (!in_array($audio[1], $storyArray['fiction: books'])) {
                    $storyArray['fiction: books'][] = $audio[1];
                }
            }
            if (strtolower($audio[8]) == "fiction: stories") {
                if (!in_array($audio[1], $storyArray['fiction: stories'])) {
                    $storyArray['fiction: stories'][] = $audio[1];
                }
            }
            if (strtolower($audio[8]) == "poetry") {
                if (!in_array($audio[1], $storyArray['poetry'])) {
                    $storyArray['poetry'][] = $audio[1];
                }
            }
            if (strtolower($audio[8]) == "nonfiction") {
                if (!in_array($audio[1], $storyArray['nonfiction'])) {
                    $storyArray['nonfiction'][] = $audio[1];
                }
            }
            if (strtolower($audio[9]) == "contemporary southern writers") {
                if (!in_array($audio[1], $storyArray['contemporary southern writers'])) {
                    $storyArray['contemporary southern writers'][] = $audio[1];
                }
            }
        }
    }
    ?>

    <div class="acc-group default-style">
        <button data-toggle="collapse" data-target="#acc1" class="collapsed"><h2>Fiction: Books</h2></button>
        <div id='acc1' class='collapse in'>
            <div class='content'>
                <?php
                foreach ($storyArray['fiction: books'] as $author) {
                    echo '<a href="workslist.php?author=' . $author . '">' . $author . '</a><br />' . PHP_EOL;
                }
                ?>
            </div>
        </div>
    </div>
    <div class="acc-group default-style">
        <button data-toggle="collapse" data-target="#acc2" class="collapsed"><h2>Fiction: Stories</h2></button>
        <div id='acc2' class='collapse in'>
            <div class='content'>
                <?php
                foreach ($storyArray['fiction: stories'] as $author) {
                    echo '<a href="workslist.php?author=' . $author . '">' . $author . '</a><br />' . PHP_EOL;
                }
                ?>
            </div>
        </div>
    </div>
    <div class="acc-group default-style">
        <button data-toggle="collapse" data-target="#acc3" class="collapsed"><h2>Poetry</h2></button>
        <div id='acc3' class='collapse in'>
            <div class='content'>
                <?php
                foreach ($storyArray['poetry'] as $author) {
                    echo '<a href="workslist.php?author=' . $author . '">' . $author . '</a><br />' . PHP_EOL;
                }
                ?>
            </div>
        </div>
    </div>
    <div class="acc-group default-style">
        <button data-toggle="collapse" data-target="#acc4" class="collapsed"><h2>Non-fiction</h2></button>
        <div id='acc4' class='collapse in'>
            <div class='content'>
                <?php
                foreach ($storyArray['nonfiction'] as $author) {
                    echo '<a href="workslist.php?author=' . $author . '">' . $author . '</a><br />' . PHP_EOL;
                }
                ?>
            </div>
        </div>
    </div>
    <div class="acc-group default-style">
        <button data-toggle="collapse" data-target="#acc5" class="collapsed"><h2>Contemporary Southern Writers</h2></button>
        <div id='acc5' class='collapse in'>
            <div class='content'>
                <?php
                foreach ($storyArray['contemporary southern writers'] as $author) {
                    echo '<a href="workslist.php?author=' . $author . '">' . $author . '</a><br />' . PHP_EOL;
                }
                ?>
            </div>
        </div>
    </div>
    <?php
}

function getPlaylist($section) {
    $url = "http://podcasting.gcsu.edu/4DCGI/Podcasting/GRU/Episodes/";
    $playlist = "";
    foreach ($_SESSION['matrix'] as $story) {
        if (strtolower($story[8]) == strtolower($section)) {
            $playlist .= "'" . $url . $story[4] . "', ";
        }
    }
    return substr($playlist, 0, strlen($playlist) - 2);
}

function displayColoring() {
    $dir = getcwd();
    $files = scandir($dir . '/color/jpg/');
    $count = 1;

    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            ?>
            <div style="float: left; padding: 5px;">
                <a class="img-print" href="javascript:void(0);" onclick="printImg('<?php echo $file; ?>');">
                    <img src="http://www.gru.edu/audiobooks/color/thumb/<?php echo $file; ?>" alt="coloringbook" />
                </a>
            </div>
            <?php
            if ($count % 3 == 0) {
                ?>
                <div style="clear: both;"></div>
                <?php
            }
            $count++;
        }
    }
}
?>
