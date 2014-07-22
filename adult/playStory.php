<?php
require_once('Mobile_Detect.php');
require_once('functions.php');
$detect = new Mobile_Detect();
session_start();
if (!isset($_SESSION['matrix'])) {
	loadData();
}

        const URL = "http://podcasting.gcsu.edu/4DCGI/Podcasting/GRU/Episodes/";

if (isset($_POST['story']) && $_POST['story'] != "") {
    $index = $_POST['index'];
    $prevIndex = $index - 1;
    $nextIndex = $index + 1;
    $temp = explode('.', $_POST['story']);
    if ($temp[1] == "mp4") {
        if (!$detect->isMobile()) {
            ?>
            <div id="video" style="width: 854px; height: 480px;"></div>
            <script src="flowplayer-3.2.12.min.js"></script>
            <script>
                $f("video", "flowplayer-3.2.16.swf", {
                    play: {
                        replayLabel: null
                    },
                    clip: {
                        url: "<?php echo URL . $_POST['story']; ?>",
                        autoBuffering: true,
                        autoPlay: true,
                        onFinish: function() {
                            openDialog('<?php echo $_SESSION['matrix'][$nextIndex][4]; ?>', '<?php echo utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$nextIndex][2]))); ?>', <?php echo $nextIndex; ?>);
                        }
                    },
                    plugins: {
                        controls: {
                            url: "http://releases.flowplayer.org/swf/flowplayer.controls-tube-3.2.15.swf",
                            borderRadius: '15',
                            sliderColor: '#57e321',
                            buttonColor: '#5c9ccc',
                            backgroundGradient: 'high',
                            callType: 'default',
                            volumeSliderColor: '#48f307',
                            disabledWidgetColor: '#555555',
                            buttonOverColor: '#f3443a',
                            progressColor: '#31a206',
                            autoHide: 'never',
                            timeColor: '#b3d4ff',
                            progressGradient: 'none',
                            backgroundColor: '#b3b3b3',
                            tooltipTextColor: '#D00000',
                            durationColor: '#ffffff',
                            timeBgColor: '#005399',
                            buttonOffColor: 'rgba(90,90,90,1)',
                            tooltipColor: '#C9C9C9',
                            volumeSliderGradient: 'none',
                            timeBorder: '1px solid rgba(0, 0, 0, 0.3)',
                            bufferGradient: 'none',
                            bufferColor: '#53fc12',
                            sliderGradient: 'none',
                            volumeColor: '#2ea003',
                            height: 36,
                            opacity: 1.0
                        }
                    }
                });
            </script>
            <div style="float:left; text-align: center;"><a href="javascript:void(0);" onclick="jQuery('#target').dialog('close');
                    openDialog('<?php echo $_SESSION['matrix'][$prevIndex][4]; ?>', '<?php echo utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$prevIndex][2]))); ?>', <?php echo $prevIndex; ?>);"><img src="images/leftArrow.png" alt="previous" /></a>
            </div>
            <div style="text-align: center; float: left; width: 660px;">
                <a href="javascript:void(0);" onclick="jQuery('#target').dialog('close');"><img src="images/Ballon-Small.png" /><br />Close</a>
            </div>
            <div style="float: right; text-align: center;"><a href="javascript:void(0);" onclick="jQuery('#target').dialog('close');
                    openDialog('<?php echo $_SESSION['matrix'][$nextIndex][4]; ?>', '<?php echo utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$nextIndex][2]))); ?>', <?php echo $nextIndex; ?>);"><img src="images/rightArrow.png" alt="next" /></a>
            </div>
            <?php
        } else {
            ?>
            <video id="player" width="854" height="480" controls>
                <source src="<?php echo URL . $_POST['story']; ?>" type="video/mp4">
                <object data="<?php echo URL . $_POST['story']; ?>" width="854" height="480">
                </object> 
            </video>
            <div style="float:left;"><a href="javascript:void(0);" onclick="jQuery('#target').dialog('close');
                    openDialog('<?php echo $_SESSION['matrix'][$prevIndex][4]; ?>', '<?php echo utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$prevIndex][2]))); ?>', <?php echo $prevIndex; ?>);">Previous</a></div>
            <div style="float: right;"><a href="javascript:void(0);" onclick="jQuery('#target').dialog('close');
                    openDialog('<?php echo $_SESSION['matrix'][$nextIndex][4]; ?>', '<?php echo utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$nextIndex][2]))); ?>', <?php echo $nextIndex; ?>);">Next</a></div>
                <?php
            }
        } else {
            if (!$detect->isMobile()) {
                ?>
            <div id="video" style="width: 854px; height: 100px;"></div>
            <script src="flowplayer-3.2.12.min.js"></script>
            <script>
                $f("video", "flowplayer-3.2.16.swf", {
                    play: {
                        replayLabel: null
                    },
                    clip: {
                        url: "<?php echo URL . $_POST['story']; ?>",
                        autoBuffering: true,
                        autoPlay: true,
                        provider: "audio",
                        onFinish: function() {
                            openDialog('<?php echo $_SESSION['matrix'][$nextIndex][4]; ?>', '<?php echo utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$nextIndex][2]))); ?>', <?php echo $nextIndex; ?>);
                        }
                    },
                    plugins: {
                        audio: {
                            url: "flowplayer.audio-3.2.10.swf"
                        }
                    }
                });
            </script>
            <div style="float:left;"><a href="javascript:void(0);" onclick="jQuery('#target').dialog('close');
                    openDialog('<?php echo $_SESSION['matrix'][$prevIndex][4]; ?>', '<?php echo utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$prevIndex][2]))); ?>', <?php echo $prevIndex; ?>);">Previous</a></div>
            <div style="float: right;"><a href="javascript:void(0);" onclick="jQuery('#target').dialog('close');
                    openDialog('<?php echo $_SESSION['matrix'][$nextIndex][4]; ?>', '<?php echo utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$nextIndex][2]))); ?>', <?php echo $nextIndex; ?>);">Next</a></div>
                <?php
            } else {
                ?>
            <video id="player" width="854" height="100" controls>
                <source src="<?php echo URL . $_POST['story']; ?>" type="video/mp4">
                <object data="<?php echo URL . $_POST['story']; ?>" width="854" height="480">
                </object> 
            </video>
            <div style="float:left;"><a href="javascript:void(0);" onclick="jQuery('#target').dialog('close');
                    openDialog('<?php echo $_SESSION['matrix'][$prevIndex][4]; ?>', '<?php echo utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$prevIndex][2]))); ?>', <?php echo $prevIndex; ?>);">Previous</a></div>
            <div style="float: right;"><a href="javascript:void(0);" onclick="jQuery('#target').dialog('close');
                    openDialog('<?php echo $_SESSION['matrix'][$nextIndex][4]; ?>', '<?php echo utf8_decode(htmlentities(addslashes($_SESSION['matrix'][$nextIndex][2]))); ?>', <?php echo $nextIndex; ?>);">Next</a></div>
                <?php
            }
        }
    } else {
        ?>
    <div style="text-align: center;">
        This audiobook is currently unavailable. We apologize for the inconvenience.
    </div>
    <?php
}
?>
