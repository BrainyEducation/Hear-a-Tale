<?php
require_once('functions.php');
session_start();

//TODO: Add a check for chapter; display chapter in play window

if (!isset($_SESSION['matrix'])) {
    loadData();
}
?>
<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
    <!--<![endif]-->
    <head>
        <meta name="generator"
              content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
        <title>Georgia Regents University - Title</title>
        <meta charset="utf-8" /><?php include('cssjs.php'); ?>
        <style type="text/css">
            html { overflow-x:hidden; padding: 0 !important; margin:0px !important; }
            .fullwidthbanner-container{ width:100% !important; position:relative; padding:0; max-height:700px !important; overflow:hidden; }
            .header-titles h2 a {color: fff;}
            .header-titles h2 a:hover {color: ccc;}
        </style>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css" href="jquery.css">
    </head>
    <body class="">
        <?php include('slidingpanel.php'); ?>
        <div id="page_wrapper">
            <header id="header" class="style2">
                <div class="container">
                    <!-- logo -->
                    <h1 id="logo">
                        <a href="http://www.gru.edu/">
                            <img src="http://www.gru.edu/images/logo.png" alt="Georgia Regents University" />
                        </a>
                    </h1>
                    <!-- end topnav // left aligned -->
                    <?php include('search.php'); ?>
                    <nav id="main_menu">
                        <ul class="sf-menu clearfix">
                            <?php include('mainmenu.php'); ?>
                        </ul>
                    </nav>
                    <!-- end main_menu -->
                </div>
            </header><div id="page_header" class="gradient bottom-shadow" style="min-height:150px; height:150px;">
                <div class="bgback bg3" style="background-image:url(http://www.gru.edu/images/genericheader.jpg);
                     background-position:50% 0; background-repeat:no-repeat no-repeat;"></div>
                <div class="container" style="padding:70px 0 0;">
                    <div class="row">
                        <div class="span12">
                            <div class="header-titles">
                                <a href="index.php"><h2>Audiobooks</h2></a>
                            </div>
                        </div>

                    </div><!-- end row -->
                </div>

                <div class="shadowUP"></div>
            </div>
            <section id="content">
                <div class="container">
                    <div class="mainbody">
                        <div class="row" style="margin-bottom:0; padding:20px 0; background:url('http://www.gru.edu/images/pagebg.png') repeat-x top transparent">

                            <div class="span3">
                                <?php require_once('leftnav.php'); ?>
                            </div>
                            <div class="span6" style="margin-left:0;">
                                <div id="aboutContainer">
                                    <a id="introduction"></a>
                                    <h3>Introduction</h3>

                                    <p>Fifty-two stories which last over eight hours, hundreds of rhymes that cover two more hours, hundreds of pictures—these constitute not a digital book, but a digital library.  Likely few children will sample more than a fraction of these, but educational research confirms that the more nursery rhymes and classic stories your child listens to, the earlier your child will read and the better reader your child will become.</p>
                                    <p>459 kindergarten students in an urban school district in the South who regularly listened to these recordings at home and sometimes in class improved their vocabulary scores an average of 20 points (from the 27<sup>th</sup> to the 47<sup>th</sup> percentile), compared to a control group of 283 kindergarten students from the same school system who weren’t exposed to the discs; these control students improved only 4 percentile points (from 30<sup>th</sup> to the 34<sup>th</sup> percentile). <em>[Contact the English program at Georgia Regents University (706-737-1500) or email <a href="mailto:rhmeazoo@gru.edu">rhymeazoo@gru.edu</a> if you would like copies of nine pages of statistical analyses of the PPVT scores.]</em></p>
                                    <p>These traditional rhymes and stories can help your child in other ways as well.  For more discussion on the topic, see: <a href="#why">Why Classic Rhymes and Stories Matter</a>.</p>
                                    <p>A generous grant from PotashCorp in 2010 allowed us to manufacture and distribute 3500 discs, and an anonymous donor allowed us to distribute 700 more.  An even more generous 2011 grants from PotashCorp, a sizeable commitment from the Richmond County School Board, and an anonymous donor allowed us to create and distribute in Fall 2011 30,000 discs with 10 hours of audio plus pictures and text, enough discs to place one in the hand of every kindergarten and pre-K student, teacher, and in every Media Center in 14 surrounding counties and donate 200 to the local library system.</p>
                                    <p><b>Please donate to the English Program Schools Project at Georgia Regents University.</b></p>
                                    <p>Most of the children who most need these resources have no online computer access in the home, though the great majority do have a DVD player, Xbox or Playstation for which the disc is designed.  We would love to be able to provide discs for these children, and to day care centers, Prime Time, Boys Clubs, Girls Clubs, hospitals—wherever children can benefit from them.  All donations are tax deductible; please visit our Foundation website at <a href="https://giving.gru.edu/donate">https://giving.gru.edu/donate</a>  or email <a href="mailto:rhymeazoo@gru.edu">rhymeazoo@gru.edu</a> or phone 706-729-2167 or 706-737-1500.</p>

                                    <a id="summaries"></a>
                                    <h3>Story Plot Summaries</h3>

                                    <p>In the chart below, story titles in <span style="color: blue;">blue</span> emphasize male protagonists and may appeal more to boys, stories titled in <span style="color: red;">red</span> emphasize female protagonists and may appeal more to girls, stories titled in <span style="color: green;">green</span> may appeal equally to both girls and boys, as may stories titled in <span style="color: black;">black</span> which feature animals and other non-human protagonists.  Longer stories tend to have more challenging vocabulary, syntactic patterns, and sentence structures.</p>

                                    <table>
                                        <tr>
                                            <td width="40%"></td>
                                            <td width="30%">(words ~ minutes : seconds)</td>
                                            <td width="30%">(reader)</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">The Milkmaid</span></td>
                                            <td width="30%">(348 ~2:1 )</td>
                                            <td width="30%">Megan Heredia</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A girl’s daydreams about a beautiful dress and wonderful life end badly when she doesn’t
                                                pay attention to what she’s doing here and now.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">The Oak Tree and the Reeds</span></td>
                                            <td width="30%">(286 ~ 2:18)</td>
                                            <td width="30%">Jim Garvey</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A big, strong oak tree doesn’t allow sun to reach the little reeds until a storm; the reeds bend and survive, but the oak tree breaks and falls, leaving the reeds in the sunshine.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">The Dog and His Shadow</span></td>
                                            <td width="30%">(353 ~ 2:20)</td>
                                            <td width="30%">Kelly Thomas</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A greedy dog, not satisfied with his own bone, barks to get another dog’s, but as his own bone splashes in the water he realizes he had only barked at his own reflection.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">The Princess and the Pea</span></td>
                                            <td width="30%">(438 ~ 2:38)</td>
                                            <td width="30%">Megan Heredia</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A prince can’t find a real princess to marry until a pea buried under several mattresses makes a young woman too uncomfortable to sleep.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: green;">The Blind Men and the Elephant</span></td>
                                            <td width="30%">(370 ~ 2:40)</td>
                                            <td width="30%">Walter Evans</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Blind men argue whether an elephant is a snake, spear, wall, tree or something else; a boy sees the truth all along, but doesn’t bother to argue with them.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">Country Mouse and City Mouse </span></td>
                                            <td width="30%">(431 ~ 2:50)</td>
                                            <td width="30%">Kelly Thomas</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A country mouse enjoys the luxuries of city life until a frightening city cat convinces him a simple life with safety is better than a rich life full of danger.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">The Lion and the Mouse</span></td>
                                            <td width="30%">(395 ~ 2:51)</td>
                                            <td width="30%">Jim Garvey</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A lion releases a mouse, believing it’s too small and weak ever to return the favor, but when the lion is trapped in a net the mouse gnaws the threads and releases the lion.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">The Rooster and the Fox</span></td>
                                            <td width="30%">(436 ~ 3:12)</td>
                                            <td width="30%">Seretha Williams</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A fox traps a rooster by flattering the rooster’s singing voice, but the rooster escapes when he convinces the fox to taunt and trash talk his pursuers.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">The Little Red Hen</span></td>
                                            <td width="30%">(477 ~ 3:14)</td>
                                            <td width="30%">Megan Heredia</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Lazy animals refuse to help the hen plant the seed, harvest the grain, or bake the bread, so the hen refuses to share the baked bread with the lazy animals.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">How Sun and Moon Came to the Sky</span></td>
                                            <td width="30%">(538 ~ 3:53)</td>
                                            <td width="30%">Cowboy Mike Searles</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Sun and his wife Moon invite Sea to visit, but when their home fills with water and fish, Sun and Moon retreat to a new home in the sky.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">The Grasshopper and the Ants</span></td>
                                            <td width="30%">(686 ~ 4:07)</td>
                                            <td width="30%">Kelly Thomas</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">The grasshopper plays, making fun of ants who work and prepare for the future, but in winter they have food, are warm, and relax, while the grasshopper is cold and hungry.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">The Boy Who Cried Wolf</span></td>
                                            <td width="30%">(722 ~ 4:37)</td>
                                            <td width="30%">Brett P. Hall</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Bored watching over the sheep, a boy causes excitement by lying that a wolf threatens; when a real wolf attacks, the people think the boy’s lying and won’t come to help him.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">Chicken Little</span></td>
                                            <td width="30%">(743 ~ 4:39)</td>
                                            <td width="30%">Megan Heredia</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">An acorn falls on Chicken Little’s head and convinces him and his friends the sky is falling; they go to tell the king, but the fox lures them into his den.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: green;">The Three Wishes</span></td>
                                            <td width="30%">(765 ~ 5:08)</td>
                                            <td width="30%">Seretha Williams</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A fairy grants three wishes to a man and wife who squander them; the wife nearly winds up with a sausage attached to her nose.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">The Queen Bee</span></td>
                                            <td width="30%">(886 ~ 5:15)</td>
                                            <td width="30%">Rose-Anna Thompson</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Two elder brothers call a boy Numbskull, but ants, ducks, and bees reward his kindness and help him accomplish tasks to win princesses as brides for himself and his brothers.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">How Fire Came to the Indians</span></td>
                                            <td width="30%">(807 ~ 5:42)</td>
                                            <td width="30%">Cowboy Mike Searles</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A fatherless boy is mocked by children and adults, but after everyone else fails, he shoots an arrow which falls to earth bringing fire to the tribe, then he disappears.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: green;">The Elves and the Shoemaker</span></td>
                                            <td width="30%">(830 ~ 6:06)</td>
                                            <td width="30%">Walter Evans</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">By secretly making shoes, two elves save a poor shoemaker and his wife; the man and wife make clothes to reward the elves, who leave when their help is no longer needed.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">Goldilocks and the Three Bears</span></td>
                                            <td width="30%">(1092 ~ 6:13)</td>
                                            <td width="30%">Megan Heredia</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A nosy little girl invades the bears’ home and falls asleep; when they return and discover her, she wakes and runs away.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">Toads and Diamonds</span></td>
                                            <td width="30%">(1087 ~ 6:19)</td>
                                            <td width="30%">Rachel Harmon</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Mistreated by her elder sister and mother, a girl is polite to a fairy who causes jewels to fall from the girl’s mouth when she speaks; toads fall from her impolite sister’s mouth.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">The Turtle and the Rabbit</span></td>
                                            <td width="30%">(880 ~ 6:25)</td>
                                            <td width="30%">Cowboy Mike Searles</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A modest turtle races a speedy rabbit who brags, shows off, and takes a nap; by slowly and steadily moving ahead, never stopping or quitting, the turtle wins the race.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">The Frog-Prince</span></td>
                                            <td width="30%">(1188 ~ 6:33)</td>
                                            <td width="30%">Christina Heckman</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A frog returns a ball for a princess who treats him badly until her parents insist she be nicer; her kind treatment breaks a spell, he becomes a handsome prince, and they marry. </td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">The Three Little Pigs</span></td>
                                            <td width="30%">(986 ~ 6:34)</td>
                                            <td width="30%">Jim Garvey</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Two pigs squander their money and build shabby houses; their smarter brother saves and works hard to build a brick house which protects them all from the big bad wolf.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">The Three Billy Goats Gruff</span></td>
                                            <td width="30%">(891 ~ 6:41)</td>
                                            <td width="30%">Walter Evans</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Two billy goats trick a mean troll into waiting for their brother; with his horns the big brother knocks the troll off the bridge.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">Tortoise, Elephant, and Hippo</span></td>
                                            <td width="30%">(984 ~ 7:10)</td>
                                            <td width="30%">Seretha Williams</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Elephant and Hippo bully other animals until Tortoise tricks them into a tug of war; thinking it’s Turtle, each pulls against each other; humbled, they then treat others nicely.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">The Tale of Peter Rabbit</span></td>
                                            <td width="30%">(933 ~ 7:29)</td>
                                            <td width="30%">Cindy Wilkinson</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Peter disobeys his mother and enters Mr. MacGregor’s garden, where he is almost captured and put into a pie; Peter escapes and returns to his mother who scolds him.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: green;">The Pied Piper of Hamelin</span></td>
                                            <td width="30%">(967 ~ 7:33)</td>
                                            <td width="30%">Jim Garvey</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Town officials hire a piper to play music to lead rats away; when they try to cheat him, he plays beautiful music and leads the children to heaven, away from the dishonest adults.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">The Gingerbread Man</span></td>
                                            <td width="30%">(1095 ~ 7:39)</td>
                                            <td width="30%">Walter Evans</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">The Gingerbread Man speaks rudely, brags, and outruns all the people and animals until the fox’s help, is tricked and swallowed.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">How Anansi the Spider Got Long Legs</span></td>
                                            <td width="30%">(1296 ~ 7:39)</td>
                                            <td width="30%">Raheema Johnson</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Anansi once had two ordinary legs like people, but, lazy and hungry, he selfishly schemes to eat his friends’ food and winds up with eight long skinny legs.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">Rumplestiltskin</span></td>
                                            <td width="30%">(1344 ~ 8:18)</td>
                                            <td width="30%">Megan Heredia</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A cruel man spins straw into gold to save a girl’s life, demanding her first child in payment; when she’s queen she saves her child by learning the man’s secret name.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">Little Red Riding Hood</span></td>
                                            <td width="30%">(1243 ~ 8:28)</td>
                                            <td width="30%">Cindy Wilkinson</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A girl speaks to a wolf and leaves the proper path; the wolf swallows the grandmother and girl, but a huntsman kills the wolf, opens the wolf’s belly, and rescues both of them.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">Rapunzel</span></td>
                                            <td width="30%">(1471 ~ 8:31)</td>
                                            <td width="30%">Christina Heckman</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A witch forces a couple to give her their daughter, then locks the girl away in a high tower; the girl lowers her long hair to a prince who climbs the tower and rescues her.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">The Bremen Town Musicians</span></td>
                                            <td width="30%">(1450 ~ 9:16)</td>
                                            <td width="30%">Cindy Wilkinson</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">When their owners plan to do away with them, four animals leave to become musicians; they trick some robbers, chase them away, and make a new home in the robbers’ house. </td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: black;">The Little Engine That Could</span></td>
                                            <td width="30%">(1168 ~ 10:09)</td>
                                            <td width="30%">Jim Garvey</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">After larger and more powerful engines refuse to help, a small engine helps the train of toys cross the mountain so the children will have their Christmas toys.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">Puss in Boots</span></td>
                                            <td width="30%">(1789 ~ 10:18)</td>
                                            <td width="30%">Kelly Thomas</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">After his master buys him some boots, a cat tricks a king and an ogre and arranges for his master to marry a princess.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">The Hardy Tin Soldier</span></td>
                                            <td width="30%">(1705 ~ 10:28)</td>
                                            <td width="30%">Joseph Cornelison</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A one-legged toy soldier loves a cardboard dancer; a cruel goblin causes the soldier to fall from a window, get swallowed by a fish, and be tossed in a stove with the dancer.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">The Golden Goose</span></td>
                                            <td width="30%">(1702 ~ 10:46)</td>
                                            <td width="30%">Rick Davis</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Bullied by his brothers, Knucklehead is kind to people in need, and with their help he gains a magical goose and other things which lead to him marrying a princess.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">Jack the Giant Killer </span></td>
                                            <td width="30%">(1911 ~ 11:48)</td>
                                            <td width="30%">Joseph Cornelison</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Clever and brave, Jack travels the country killing a series of giants, rescues some ladies, marries a duke’s daughter, and receives a castle from King Arthur.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">Why the Sea is Salt (or, The Quern)</span></td>
                                            <td width="30%">(1983 ~ 12:36)</td>
                                            <td width="30%">Walter Evans</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Sent to “the bad place" by his mean rich brother, the poor younger brother trades for a magic grindstone, becomes rich, and sells it to a sea captain who grinds too much salt.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">Molly Whuppie</span></td>
                                            <td width="30%">(2352 ~ 12:46)</td>
                                            <td width="30%">Megan Heredia</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Not pretty like two older sisters, Molly is clever and brave, saving them from an ogre, and taking the ogre’s silver sword, bag of gold, and diamond pin; all three girls marry princes. </td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: green">The Emperor’s New Clothes</span></td>
                                            <td width="30%">(2126 ~ 13:08)</td>
                                            <td width="30%">Megan Heredia</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Lying thieves claim they can make magical clothes invisible to bad and stupid people; the emperor parades naked, adults pretend to see clothes, until a child speaks the truth.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">Rose White and Rose Red</span></td>
                                            <td width="30%">(2579 ~ 14:12)</td>
                                            <td width="30%">Rachel Harmon</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Two sisters befriend a bear; later they help a dwarf who is cruel and ungrateful; when he tries to harm them the bear kills the dwarf and becomes a handsome prince.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">Snow White and the Seven Dwarfs</span></td>
                                            <td width="30%">(2540 ~ 14:39)</td>
                                            <td width="30%">Rachel Harmon</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A princess escapes a cruel stepmother and lives in the woods with seven dwarfs; the mean stepmother nearly kills her with a poison apple, but a prince saves and marries her.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">Cinderella</span></td>
                                            <td width="30%">(2567 ~ 15:03)</td>
                                            <td width="30%">Megan Heredia</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Mistreated, hard-working Cinderella gets a beautiful gown and magic coach from her fairy godmother; when her foot fits the glass slipper a prince marries her. </td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">Tom Thumb</span></td>
                                            <td width="30%">(2659 ~ 15:05)</td>
                                            <td width="30%">Joseph Cornelison</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Though no bigger than a thumb, Tom is clever and tricky; he helps his father and mother, outwits thieves, is swallowed by a cow and a wolf, but escapes and returns home.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">Sleeping Beauty</span></td>
                                            <td width="30%">(2280 ~ 15:13)</td>
                                            <td width="30%">Cindy Wilkinson</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Cursed by a bad fairy, a princess sleeps for a hundred years, but finally is awakened and rescued by a handsome prince.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: green;">The Fisherman and His Wife</span></td>
                                            <td width="30%">(2211 ~ 16:37)</td>
                                            <td width="30%">Walter Evans</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A fisherman catches a magic fish and releases it; his wife keeps demanding the fisherman ask more and more favors from the fish, until finally the fish takes everything back.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">Jack and the Beanstalk</span></td>
                                            <td width="30%">(2588 ~ 18:24)</td>
                                            <td width="30%">Jim Garvey</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Jack trades a cow for magic beans which grow into a beanstalk; he climbs to the clouds, from a giant takes gold, a magic hen, and a magic harp, and makes his mother happy.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">The Tinder Box</span></td>
                                            <td width="30%">(3043 ~ 20:24)</td>
                                            <td width="30%">Brett P. Hall</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">With a witch’s help, a soldier gets a tinder box (used to make fire, before matches) which controls three magic dogs who help him become rich and marry a princess.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: red;">The Pot of Pink Flowers</span></td>
                                            <td width="30%">(3224 ~ 21:20)</td>
                                            <td width="30%">Cindy Wilkinson</td>
                                        </tr>
                                        <tr>An orphan girl has a mean brother; she treats kindly a woman who turns out to be both a fairy and her aunt; the girl’s a princess, the flowers an enchanted prince she marries.
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">The Princess on the Glass Hill</span></td>
                                            <td width="30%">(3786 ~ 21:27)</td>
                                            <td width="30%">Brett P. Hall</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A bullied younger brother braves earthquakes and storms, winning three horses; in disguise, he rides each farther up a glass hill to win the hand of a princess.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: blue;">The Brave Little Tailor</span></td>
                                            <td width="30%">(3648 ~ 21:29)</td>
                                            <td width="30%">Rick Davis</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">A tailor brags he killed seven flies, but others think he meant men; he outwits two giants, catches a unicorn and wild pig, and wins a princess who at first dislikes him.</td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><span style="color: green;">Hansel and Gretel</span></td>
                                            <td width="30%">(3154 ~ 22:01)</td>
                                            <td width="30%">Walter Evans</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Abandoned in the forest because of a wicked stepmother, a boy and girl find a candy house, are captured by a witch, trick her, and return home with riches for their father.</td>
                                        </tr>
                                    </table>
                                    <a id="parents"></a>
                                    <h3>To Parents and Caregivers</p></h3>

                                    <h4>Interact with your Child</h4>
                                    <p>We hope you’ll find ways to actively encourage the children in your life to enjoy these online offerings—perhaps by turning down the volume and reading aloud the onscreen text of the stories or rhymes, perhaps by discussing with the children what they hear and understand, maybe by asking questions about rhyming sounds or why characters do certain things or why the picture shows what it does, or by asking if they can identify certain letters or words on the screen, or by asking them to close their eyes when listening to a story—for most children the pictures in their imaginations will be far richer than any onscreen visual.</p>

                                    <p>Most important of all, demonstrate that you love them, that you treasure them and their learning experiences, that you very much enjoy sharing time with them.</p>

                                    <p>Your children more often demand greasy chicken nuggets and french fries, than vegetables, and they whine for candy, not fruit.  You know what they want isn’t always what’s best for them.  It’s important to respect the difference between junk food and healthy food, but it’s even more important to understand the difference between mental junk food (most tv shows and cartoons and movies and video games) and healthy mental nourishment like the classics available on this website.</p>

                                    <p>The more your child listens to and repeats these rhymes and stories, the better prepared she or he will be for learning to read, the best possible foundation for doing well in school and later in life.</p>

                                    <p>Some words will be unfamiliar, but figuring out their meanings in context will increase your child’s vocabulary—the more words a child knows, the more words a child will be able to learn.  Sometimes sentence length or sentence patterns will challenge your child—but hearing a story two or three times will help your child develop the skills and capabilities to understand and eventually read even more demanding texts.</p>

                                    <p>Please ask your child to try to learn a new nursery rhyme every day, at least two or three every week.  It would be wonderful if you could put on the refrigerator or could tape somewhere a piece of paper on which you write the title of every new rhyme your child learns.  Many rhymes are quite short and easy to learn—and for longer ones you might count each stanza as a separate rhyme.</p>

                                    <p>Reciting rhymes to grandparents or other family members or friends will reinforce the child’s self confidence and well-deserved pride in academic accomplishment.</p>

                                    <p>Rewarding a child every so often, perhaps a special treat or privilege for learning three rhymes or five, or for telling a new story, will go far to help your child understand the links between effort, academic success, and reward.</p>

                                    <p>Try using stories on the site as bedtime stories.  If this isn’t practical, every few days, maybe once a week, encourage your child to listen to and retell for you a new story, and perhaps get him or her to retell the story to family members or friends.  If your child doesn’t know or remember a rhyme, start one and see if your child can finish it.  Take turns with your child alternating lines of a rhyme or telling parts of a story.  As much as your child loves cartoon characters and pets and toys, she loves you more, he loves you more, than anything.  Model the behaviors you value, show them how much you treasure what they can accomplish, and you’ll give them a gift far more precious and enduring than any of those expensive toys or games or clothes you’d like to buy them, though deep down inside you realize all these objects are far less valuable than the time you spend with them sharing rhymes and stories—and love.</p>



                                    <a id="teachers"></a>
                                    <h3>To Teachers</p></h3>

                                    <p>You have too much to do, too little time and very little, if any, of that is free or discretionary time.  This site can extend the school day for you, can help your students do valuable work outside of class if you can find ways to encourage the children to regularly watch and listen, and if you can encourage parents sit beside them to talk and ask questions and to praise the children for reciting rhymes and retelling stories.</p>

                                    <p>In your classroom you might find a place for a chart on which each child earns a check or smiley face for speaking a rhyme or telling a story.</p>

                                    <p>You might let children take turns saying lines of a rhyme, or share turns telling parts of a story.</p>

                                    <p>You might show a picture and ask the children if it makes someone think of a rhyme, or show two or three pictures and ask them which picture best fits which rhyme.</p>

                                    <p>Every teacher knows that research is virtually unanimous in finding that the earliest literacy training is the most crucial, in stressing the vital importance of children hearing stories read aloud in the home, in emphasizing how children suffer when we fail to surround them with a rich and stimulating verbal environment, in the fundamental importance of nurturing in children a desire to read.  You and other teachers work tirelessly to promote literacy in a student population too often handicapped by poverty, by a lack of educational resources, by low educational levels among parents, by a preponderance of single-family homes in which over-worked parents too seldom have the opportunity—or sometimes skills—to properly nourish their children’s education.</p>

                                    <p>In an environment where teachers are doing all they can or know how to do, it’s pointless to ask you to work harder.  We can, however, help you help your students learn more efficiently by providing you and them with this site.  Many of your students have access to too few books in the home and seldom visit a local library.  Now students with access to a parent’s or sibling’s cell phone or digital notebook or some other way to go online will possess a wonderful library of classic rhymes and stories which the child can hear read aloud whenever you assign rhymes or stories as homework—or whenever the child desires.</p>

                                    <p>Generations of children have taught adults which stories and rhymes they prefer, and for hundreds of years—until the past few decades—teachers have built on the diverse literacy skills  (phonological awareness, vocabulary, comprehension, etc.) children develop through repeated experiences with nursery rhymes, fables, folktales, and fairy tales.  In the past half century the rise of sensually stimulating, image-oriented media has paralleled a decline in opportunities for children to hear, memorize, or read the sorts of verbally rich texts which our culture had evolved to help children learn what they most needed, most wanted, and most enjoyed learning.  It’s no surprise to anyone that declining reading scores have paralleled children’s declining experience with those texts.</p>

                                    <p>Scientific research clearly identifies specific skills and strategies young children must master before they can learn to read.   At the most basic level the National Reading Panel (2002), for example, noted and defined five essential early literacy skills (phonological awareness, phonics, fluency, vocabulary, and comprehension).  Though we don’t need to outline for you nursery rhymes’ potential for empowering children in each of the five areas, this site will help you to specifically address each of these through nursery rhymes.  (You certainly don’t need to be told, for example, that you can teach phonemic awareness and phonics by playing rhymes from the site in your classroom and pointing to individual letters or targeting phonemes, syllables, or words.)  Stories complement the rhymes on the site and depend on students gradually building more sophisticated skills.  The shorter stories, many of these African fables retold by Aesop, run about two minutes, tend to contain fewer words per sentence (16-18), and depend on less sophisticated grammatical structures; the longest stories, ranging up to twenty-two minutes, contain more words per sentence (24-29), and more challenging vocabulary and grammatical patterns.</p>

                                    <p>You’re already familiar with the conclusions of research like that sampled below, but just for the record, educational research has repeatedly and consistently demonstrated how important it is for children, pre-readers or developing readers, to hear stories and rhymes.</p>

                                    <p>“The single most important activity for building the knowledge required for eventual success in reading is reading aloud to children" (Anderson, R.C., Hiebert, E. H., Scott, J. A. & Wilkinson, I. A. G. [1985] <em>On Becoming a Nation of Readers</em>: The Report of the Commission on Reading).</p>

                                    <p>Reading storybooks aloud helps teach children meanings of unfamiliar words (Robbins, C. and Ehri, L. [1994], “Reading Storybooks to Kindergartners Helps Them Learn New Vocabulary Words," <em>Journal of Educational Psychology</em>, 86 [1], 54-64).</p>

                                    <p>Younger children significantly improved new expressive vocabulary from a single oral reading of a book (Senechal, M. and Cornell, E.H. [1993], “Vocabulary Acquisition Through Shared Reading Experiences," <em>Reading Research Quarterly</em>, 28 [4], 360-74).</p>

                                    <p>“Students become more fluent readers when provided with models of fluent reading" (Armbruster, B.B., Lehr, F., and Osborne, J. H. [2001] “The Research Building Blocks for Teaching Children to Read," Developed by the Center for the Improvement of Early Reading Achievement: National Institute for Literacy, National Institute for Child Health and Human Development, and U.S. Department of Education).</p>

                                    <p>Among findings published in The National Reading Panel Report (2000):  the kind of effective vocabulary instruction supported by research emphasizes multimedia aspects of learning, richness of context in which words are to be learned, and the number of exposures to words that learners receive.</p>

                                    <p>Kristen Denton and Garry West (2002) report that children read to at least three times a week were almost twice as likely to score in the top 25% in reading than children read to fewer than three times a week; young children read to three times weekly entered school significantly more able to identify the letter-sound relationship at the beginning of words and at the end of words than children read to fewer than three times weekly; nearly twice as many children who had been read to three times weekly had sign-word recognition skills compared to children read to fewer than three times weekly; more than twice as many children read to three times weekly could understand words in context compared to those read to fewer than three times weekly (<em>Children’s Reading and Mathematics Achievement in Kindergarten and First Grade</em>, U. S. Dept. of Education, NCES, Wash., DC).</p>

                                    <p>For decades educational research has repeatedly demonstrated how fundamentally important it is for children to hear texts read aloud.  Nevertheless, unfortunate children whose environments provide the least experience of sophisticated verbalization tend to have parents or caregivers who rarely read to them.  With your help and encouragement, this site will empower these children, will allow them to decide when to hear verbally rich stories and nursery rhymes, and how long to keep listening.</p>

                                    <p>(Teachers interested in earning two PLUs (professional learning units) through an online 20-hour course on using rhymes and stories to promote literacy and pre-literacy should email us at <a href="mailto:rhymeazoo@gru.edu">rhymeazoo@gru.edu</a>)</p>

                                    <a id="why"></a>
                                    <h3>Why Classic Rhymes and Stories Matter</p></h3>

                                    <p>A rare child might find joy in almost every rhyme and story and picture on the site; some may dislike them all.  Given the opportunity, many children will discover they like some rhymes, a few tales, but may find the rest boring, and after dallying with the site a while, will reject these book-like presentations for a movie or tv show or video game that renders them passive by stimulating their senses far more than their minds.  God bless them.</p>

                                    <p>Still, we believe—and the research demonstrates—that the more time young children spend with nursery rhymes and classic fables and folk tales and fairy tales, the more efficiently they develop a wide variety of linguistic abilities, the more quickly they become literate, and the more successful they are in school and beyond school.</p>

                                    <p>Since time immemorial, in virtually every human culture, elders have understood how children’s stories powerfully embed fundamental life lessons.  This is one reason that the story of the tortoise and the hare (though the animals may differ) is known across the planet.  We all deserve to encounter them, and the blind men and the elephant, and the little chicken who thought the sky was falling, and the boy who cried wolf, and the red-hooded girl whom the wolf deceived, and the three little pigs whom he almost devoured.  We all need to understand the message of personal responsibility the little red hen represents.  No matter how small we are, on the outside or on the inside, we all need to find and nurture in ourselves the kind of courage the little engine discovers when she attempts what seems almost impossible.  We all need to know that believing in ourselves and trying our best is often the most important link between “I think I can—" and “I thought I could!"  Character matters.  Morality matters.  And so do the stories by which children learn these important truths.</p>

                                    <p>At our best we adults tend to see through lenses of logic and reason, though these same lenses may leave a child virtually blind, especially in the face of troubling psychological issues.  Classic fairy tales enable a child to resolve unspoken fears imaginatively, in ways which transcend and which humble logic and reason.   Each classic story shapes itself into a special magic spell which can help heal psychological wounds hidden not only from adults, but too scary sometimes even for a child to acknowledge.  Even the most secure children fear abandonment in ways few adults recognize or understand.  But Hansel and Gretel understand.  And they do suffer.  But even so these two children learn to rely on themselves, and manage to persevere and triumph—and they allow every boy and every girl to imaginatively identify with that success.   A need to repeat and reinforce that specific kind of imagined success is one reason children need to hear the same story over and over. Cinderella and Jack and the Beanstalk and Sleeping Beauty and Peter Rabbit and Rumplestiltskin and Molly Whuppie target quite different psychological needs, which is one reason each child has favorites, and why—as psychological needs change—a child’s favorites will change.</p>

                                    Classic rhymes and stories:<br />
                                    <ul>
                                        <li>nurture a wide variety of linguistic skills essential for achieving literacy and provide an invaluable foundation for success in school and beyond;</li>

                                        <li>provide an opportunity for us to engage our children in a vitally important mental dimension where they are often our superiors: the imagination;</li>

                                        <li>help embed fundamental lessons of morality and character which have been and are honored by our culture and by virtually all cultures;</li>

                                        <li>enable all children to resolve normal, yet still profoundly troubling, psychological issues which neither they nor we fully understand.</li>
                                    </ul>

                                    <p>No one is smart enough to know which stories and rhymes and pictures children need most or how to design them, but generations and generations of children (our own young selves among them) have helped figure out which ones work best.  Many of them are on this site.  None of us will ever know what all these are worth or, even if we did know, could ever figure out how to pay for them.  What they offer children is invaluable.  Maybe that’s why they’re free.</p>





                                    <a id="history"></a>
                                    <h3>History of the Project</p></h3>

                                    <p>Educational research constantly reminds us that regularly hearing stories and rhymes is crucial for preparing young children to succeed in school and later in life.  Television, even children’s educational  programs, can’t fill the void.  To enable children to hear stories even when there is no adult to read to them, I had a dream of creating audio CDs of fairy tales and nursery rhymes to distribute free.   In 2006 we began recording fairy tales in the office of Edgar LaMotte, then the Manager of Augusta State University’s Media Center.   We had no studio, but Edgar’s talent and resourcefulness as audio engineer gave us an excellent start on an ambitious project.  I had no budget, however, and no realistic prospects for acquiring one.</p>

                                    <p>Service on a 2007-2008 University System of Georgia committee to study the core curriculum earned me a salary supplement of $3000.  This supplement funded an extremely successful October 2008 production of Sophocles’ <em>Antigone</em>, directed by Rick Davis, aimed primarily at high school and college students.  The production earned nearly $5000, which, with the help of Dr. Lillie Johnson (who provided endless guidance and assistance), I was able to spend on this project.  I rented time in the university Communications Lab’s audio studio and began recording with student audio engineers Lindsey Hart and Chris Pope, who quickly developed superb editing skills.  Through the years Augusta State University faculty, students, staff, and community members performed as readers.  (You can find their names in the Acknowledgments section.)  Their hard work culminated in the more than two hours of nursery rhymes and more than eight hours of stories, plus longer children’s works like <em>Alice and Wonderland</em> and the Brer Rabbit stories gathered on this site.</p>

                                    <p>I originally intended to create a few purely audio CDs, each limited to a little more than an hour of audio.  By May 2010, I had planned to create sets of ten: six audio CDs of stories, two audio CDs of mixed stories and rhymes, one audio CD of pure rhymes, and one DVD of rhymes with pictures.  Anna Kisting had already designed beautiful multi-colored labels, employing different patterns of images for each of the ten discs.  In 2010, working with the Richmond County School System (RCSS) we won an Improving Teacher Quality state grant to work with kindergarten teachers: “Using Nursery Rhymes and Fairy Tales to Promote Literacy and Pre-Literacy."  (Discussed in the Introduction above; I served as Director of the grant and Dr. Paulette Harris as Co-Director.)  The teachers, however, immediately, unambiguously, and unanimously redefined the audio project.  (You may remember from school how bossy kindergarten teachers can be!)  They whole-heartedly supported the goal of encouraging children to listen to more classic rhymes and stories, but demanded that every rhyme and story be accompanied with both pictures and text.  The audio project had roughly 4 months to turn into an audio-visual project.</p>

                                    <p>I had planned on images to accompany 60 minutes of audio, relying on about 100 black and white drawings by Charles Robinson (from Walter Jerrold’s <em>The Big Book of Nursery Rhymes</em>) scanned and refined by Amy Richerson, and about 100 more Frederick Richardson color pictures from the Volland Mother Goose, many of these digitally colorized by Joey Hart to make the faces more socially diverse.  I now needed images—and text—to accompany another hour of rhymes and eight hours of audio.   The ITQ grant administrator in Athens, GA (now Dean of Education at Georgia Southern University), Dr. Thomas Koballa, authorized us to redirect some of the grant funds to create a master from which to copy discs for the kindergarten teachers to use in their classrooms.</p>

                                    <p>Chris Pope agreed to do the technical work of creating the disc.  His sister Catie agreed to colorize even more of the Volland nursery rhyme pictures, to locate and coordinate new images for the Mother Goose and Father Gander rhyme sections, and to find and arrange pictures for all fifty stories, creating new illustrations when necessary.  On a bare-bones budget, these siblings  did extraordinary work.</p>

                                    <p>Money ran out with the creation of the prototype master disc—I couldn’t pay to duplicate all the copies necessary.  Under the guidance of Helen Hendee, Victoria Hann of ASU’s Development Office met with representatives of PotashCorp who in 2010 generously donated enough money to provide a free DVD—a ten-hour audio-visual library—to kindergarten and pre-K students in the Richmond County school system, with additional copies for each kindergarten and pre-K classroom and each elementary school media center.  An anonymous donor allowed us to provide discs to kindergarten students in Madison County.  An even larger donation by PotashCorp in 2011, sizeable commitment from the Richmond County School Board, and an anonymous donor allowed us in Fall 2011 to provide 30,000 discs individual students and to classrooms in eleven Georgia counties (Burke, Columbia, Harris, Jefferson, Jenkins, Madison, McDuffie, Richmond, Warrenton, Washington, Wilkes) and four in South Carolina (Aiken, Allendale, Barnwell, Williston).</p>

                                    <p>In 2013 we received a second Improving Teacher Quality grant, “Using Rhymes, Stories, and Digital Dialogic Reading Games to Improve Literacy," which (1) allowed us to place online all the material from the DVD, plus a good bit of additional material.  You’re able to access this site now thanks to Georgia’s ITQ program and its Director, Dr. Katherine Thompson.</p>

                                    <p>(2)  The grant also allowed us to conduct classroom seminars for kindergarten teachers and to create an online 20-hour course on using rhymes and stories to promote literacy and pre-literacy.  Even now, teachers can take the course and earn two PLUs (professional learning units; interested teachers should email us at <a href="mailto:rhymeazoo@gru.edu">rhymeazoo@gru.edu</a>).</p>

                                    <p>(3) The grant has also allowed us to create a digital game, <em>Rhyme A Zoo</em>, based on the Volland nursery rhymes.  Children listen to 120 rhymes, answer four questions per rhyme, and earn gold and silver coins to purchase an animal for the child’s private zoo; four animals complete a level/zoo section, and a child can move through eight levels.  At this stage the game is intended only for classroom computers (currently 40 classrooms in Richmond and Harris counties in Georgia).  In spring 2014 we will chart how many rhymes a student mastered against the student’s vocabulary scores on the nationally normed PPVT test.  Teachers report that children are responding quite well to the game and we hope at some point a donor or grant will allow us to put the game online at this website.</p>


                                    <a id="acknowledgements"></a>
                                    <h3>Acknowledgements</p></h3>

                                    <h4>Production</h4>
                                    <table width="700px">
                                        <tr>
                                            <td width="50%">Walter Evans</td>
                                            <td width="50%">General Editor and Project Director</td>
                                        </tr>
                                        <tr>
                                            <td>Chris Pope</td>
                                            <td>Disc Technical Director</td>
                                        </tr>
                                        <tr>
                                            <td>Catie Pope</td>
                                            <td>Disc Art Director</td>
                                        </tr>
                                        <tr>
                                            <td>Lindsey Hart</td>
                                            <td>Chief Audio Engineer</td>
                                        </tr>
                                        <tr>
                                            <td>Edgar LaMotte</td>
                                            <td>Audio Engineer</td>
                                        </tr>
                                        <tr>
                                            <td>Chris Pope</td>
                                            <td>Audio Engineer</td>
                                        </tr>
                                        <tr>
                                            <td>Emily Lambert</td>
                                            <td>Audio Engineer</td>
                                        </tr>
                                        <tr>
                                            <td>Amy Richerson</td>
                                            <td>Digital Text Jerrold (and B&W Images)</td>
                                        </tr>
                                        <tr>
                                            <td>Kamila Wodecka</td>
                                            <td>Digital Art Jerrold (colored Jerrold B&W images)</td>
                                        </tr>
                                        <tr>
                                            <td>Joey Hart</td>
                                            <td>Digital Art</td>
                                        </tr>
                                        <tr>
                                            <td>Catie Pope</td>
                                            <td>Digital Art</td>
                                        </tr>
                                        <tr>
                                            <td>Felix Sosa-Rivera</td>
                                            <td>Digital Art</td>
                                        </tr>
                                        <tr>
                                            <td>Tracie Grace Riesgo</td>
                                            <td>Digital Art</td>
                                        </tr>
                                        <tr>
                                            <td>Anna Kisting </td>
                                            <td>Disc Label Design</td>
                                        </tr>
                                        <tr>
                                            <td>Onyeka Ezenwoye</td>
                                            <td>Computer Science Consultant</td>
                                        </tr>
                                        <tr>
                                            <td>Davin Miller</td>
                                            <td>Senior Website Designer</td>
                                        </tr>
                                        <tr>
                                            <td>Karington Turner</td>
                                            <td>Website Designer</td>
                                        </tr>
                                        <tr>
                                            <td>Neea Rusch</td>
                                            <td>Highlighting Software</td>
                                        </tr>
                                        <tr>
                                            <td>Jane Millward</td>
                                            <td>Business Manager</td>
                                        </tr>
                                    </table>

                                    <h4>Administrative Oversight and Support</h4>
                                    <table width="700px">
                                        <tr>
                                            <td width="50%">Lillie Johnson</td>
                                            <td width="50%">Chair, Department of English and Foreign Languages</td>
                                        </tr>
                                        <tr>
                                            <td>Carol Rychly</td>
                                            <td>Vice- President for Academic and Faculty Affairs</td>
                                        </tr>
                                        <tr>
                                            <td>Sam Sullivan</td>
                                            <td>Vice-President for Academic Affairs</td>
                                        </tr>
                                        <tr>
                                            <td>Jack Evans</td>
                                            <td>Associate Vice-President for Communications and Marketing</td>
                                        </tr>
                                    </table>

                                    <h4>Funding</h4>
                                    <table width="700px">
                                        <tr>
                                            <td width="50%">Helen Hendee</td>
                                            <td width="50%">Vice President for Development</td>
                                        </tr>
                                        <tr>
                                            <td>Victoria Hann</td>
                                            <td>ASU Development Office</td>
                                        </tr>
                                        <tr>
                                            <td>Kevin Hyman</td>
                                            <td>Director of Human Resources, PotashCorp</td>
                                        </tr>
                                        <tr>
                                            <td>Ceil Polk</td>
                                            <td>Human Resources Specialist, PotashCorp</td>
                                        </tr>
                                        <tr>
                                            <td>Kimberly Gray</td>
                                            <td>Director, Grants Administration</td>
                                        </tr>
                                        <tr>
                                            <td>Rita Patel</td>
                                            <td>Grants Coordinator</td>
                                        </tr>
                                        <tr>
                                            <td>Thomas Koballa</td>
                                            <td>Dean of Education, Georgia State University</td>
                                        </tr>
                                        <tr>
                                            <td>Kathy Thompson</td>
                                            <td>Director, Improving Teacher Quality Program</td>
                                        </tr>
                                        <tr>
                                            <td>Clarice Thompson</td>
                                            <td>Administrator, Improving Teacher Quality Program</td>
                                        </tr>
                                    </table>

                                    <h4>Readers:  Nursery Rhymes</h4>
                                    <table width="700px">
                                        <tr>
                                            <td width="50%">Cindy Wilkinson</td>
                                            <td width="50%">Mother Goose</td>
                                        </tr>
                                        <tr>
                                            <td>Jim Garvey</td>
                                            <td>Father Gander</td>
                                        </tr>
                                        <tr>
                                            <td>Patti Myers</td>
                                            <td>Nursery Rhymes (Volland)</td>
                                        </tr>
                                        <tr>
                                            <td>Linda Banister</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Rebekah Bearden</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Rich Davis</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Walter Evans</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Jim Garvey</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Martha Ginn</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Greg Hatfield</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Bill Hobbins</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Patti Myers</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Cowboy Mike Searles</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Sea Stachura</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Katherine Sweeney</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Debbie Van Tuyll</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Betty Walpert</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Seretha Williams</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Leza Witherington</td>
                                            <td>Nursery Rhymes (Jerrold)</td>
                                        </tr>
                                        <tr>
                                            <td>Megan Heredia</td>
                                            <td>Alice in Wonderland</td>
                                        </tr>
                                        <tr>
                                            <td>Edward McCoy</td>
                                            <td>Brer Rabbit Tales</td>
                                        </tr>
                                        <tr>
                                            <td>Melanie O’Meara</td>
                                            <td>Poems</td>
                                        </tr>
                                    </table>

                                    <h4>Readers: Stories</h4>
                                    <table>
                                        <tr>
                                            <td>Joseph Cornelison </td>
                                        </tr>
                                        <tr>
                                            <td>Rick Davis</td>
                                        </tr>
                                        <tr>
                                            <td>Walter Evans</td>
                                        </tr>
                                        <tr>
                                            <td>Jim Garvey</td>
                                        </tr>
                                        <tr>
                                            <td>Brett Hall</td>
                                        </tr>
                                        <tr>
                                            <td>Rachel Harmon</td>
                                        </tr>
                                        <tr>
                                            <td>Christina Heckman</td>
                                        </tr>
                                        <tr>
                                            <td>Megan Heredia</td>
                                        </tr>
                                        <tr>
                                            <td>Raheema Johnson</td>
                                        </tr>
                                        <tr>
                                            <td>Patti Myers</td>
                                        </tr>
                                        <tr>
                                            <td>Mike Searles </td>
                                        </tr>
                                        <tr>
                                            <td>Kelly Thomas</td>
                                        </tr>
                                        <tr>
                                            <td>Tom Turner</td>
                                        </tr>
                                        <tr>
                                            <td>Rose-Anna Thompson</td>
                                        </tr>
                                        <tr>
                                            <td>Seretha Williams</td>
                                        </tr>
                                        <tr>
                                            <td>Cindy Wilkinson</td>
                                        </tr>
                                    </table>

                                    <h4>Readers: Copyright Notice</h4>
                                    <table>
                                        <tr>
                                            <td>Jackson Evans</td>
                                        </tr>
                                        <tr>
                                            <td>Nora Evans</td>
                                        </tr>
                                    </table>

                                    <h4>Consultants</h4>
                                    <table width="700px">
                                        <tr>
                                            <td width="50%">William Bloodworth</td>
                                            <td width="50%">President, Augusta State University</td>
                                        </tr>
                                        <tr>
                                            <td>Dan Whitfield</td>
                                            <td>Business</td>
                                        </tr>
                                        <tr>
                                            <td>Karl Munschy</td>
                                            <td>Business</td>
                                        </tr>
                                        <tr>
                                            <td>Maureen Akins</td>
                                            <td>Digital Technology</td>
                                        </tr>
                                        <tr>
                                            <td>Chip Matson</td>
                                            <td>Digital Technology</td>
                                        </tr>
                                        <tr>
                                            <td>Rick Pukis</td>
                                            <td>Communications Lab</td>
                                        </tr>
                                        <tr>
                                            <td>Paulette Harris</td>
                                            <td>Literacy and Pre-Literacy</td>
                                        </tr>
                                        <tr>
                                            <td>Beth Prendergraft</td>
                                            <td>Literacy and Pre-Literacy</td>
                                        </tr>
                                        <tr>
                                            <td>Cindy Beatty</td>
                                            <td>Educational Media</td>
                                        </tr>
                                        <tr>
                                            <td>Nancy Sutherland</td>
                                            <td>Children’s Literature</td>
                                        </tr>
                                        <tr>
                                            <td>Valerie Cato</td>
                                            <td>Children’s Literature</td>
                                        </tr>
                                    </table>

                                    <h4>School Coordination</h4>
                                    <table width="700px">
                                        <tr>
                                            <td width="50%">Jene Kinnett</td>
                                            <td width="50%">RCSS, English Language Arts Coordinator</td>
                                        </tr>
                                        <tr>
                                            <td>Kim Stripling</td>
                                            <td>RCSS, Director of Media and Instructional Technology</td>
                                        </tr>
                                        <tr>
                                            <td>Karen Davis</td>
                                            <td>RCSS, Coordinator of Instructional Coaches</td>
                                        </tr>
                                        <tr>
                                            <td>Jenny Landrum</td>
                                            <td>RCSS, Lead Kindergarten Consultant</td>
                                        </tr>
                                        <tr>
                                            <td>Geneva Stallings</td>
                                            <td>RCSS, Director of Title I</td>
                                        </tr>
                                        <tr>
                                            <td>Jackie Hayes</td>
                                            <td>RCSS, Title I Coordinator</td>
                                        </tr>
                                        <tr>
                                            <td>Robin Lee Myrick</td>
                                            <td>RCSS, Title I Consultant</td>
                                        </tr>
                                        <tr>
                                            <td>Rick Pittman</td>
                                            <td>RCSS, Videographer</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle Sherman</td>
                                            <td>Columbia County School System, K-5 Coordinator</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Bulla</td>
                                            <td>Madison County Schools</td>
                                        </tr>
                                    </table>

                                    <h4>Kindergarten Consultants</h4>
                                    <p>Jennifer Adams, Nelda Allen, Jana Booker, Mary Chavis, Catherine Draine, Christine Green, Joan Green, Debra Hall, Allison Hardy, Tiffany Harris, Debbie Hopkins, Jenny Landrum, Margie Maccario, Connie Mains, Amy McManus, Deborah Mobley, Ada Morgan, Ashley Pulaski, Karole Putnam, Joy Ricketts, Ann Rosado, Dawn Sanders, Tamera Saxon, Erin Shaw, Annette Simpson, Angenette Singfield, Lisa Sorrells, Cathy Spivey, Djoii Bing Steffer, Samantha Terry, Sandra Thomas, Rita Vasquez, Rhonda White, Andrea Yingling. </p>

                                    <h4>Copyright</h4>
                                    <p>All audio on this site and most of the artwork is under copyright by Georgia Regents University, all rights reserved.  Texts of many stories are primarily the work of unacknowledged translators of Jakob and Wilhelm Grimm, Hans Christen Andersen, Charles Perrault, Peter Christen Asbjornsen and Jorgen Moe, and others.  “The Little Engine That Could" was taken from <em>My Bookhouse</em>.  All these texts were in the public domain, though most of these have been edited by myself (Walter Evans), some more than others, to make them more accessible to contemporary children.  (“The Tale of Peter Rabbit," of course, is absolutely perfect and no sane editor would dare alter a syllable of Beatrix Potter’s text.)  This site’s versions of “Jack and the Beanstalk," “The Three Billy Goats Gruff," “The Gingerbread Man," “Molly Whuppie," “Anansi," and many other stories, including most of the fables, and the conversational texts for Mother Goose and Father Goose visits are my own and I claim full copyright protection for these.  Rhymes identified simply as Mother Goose and Father Gander (or Father Goose) I have cobbled together from a variety of sources.  The rhymes designated as Volland represent the whole of the classic collection edited by Eulalie Osgood Grover with illustrations by Frederick Richardson, though Catie Pope and Joey Hart have altered many of Richardson’s color images in the interest of diversity.  The rhymes designated Jerrold comprise a selection from the classic <em>Big Book of Nursery Rhymes</em> edited by Walter Jerrold with original black and white illustrations by Charles Robinson, colored for us by Kamila Wodecka.  Among the other classic illustrators:  Edmund Dulac, Warwick Goble, Kay Nielsen, Arthur Rackham, Beatrix Potter, etc.  Some other alterations of color images, and some original pictures, are the work of Catie Pope: “How Fire Came to the Indians," “Tortoise, Elephant, and Hippo," and “Solomon Grundy" from Mother Goose; and from Father Goose “One, Two, Three, Four," “Eansy, Weensy Spider," and “Star Light, Star Bright."  Tracie Grace Riesgo created art for the stories “Molly Whuppie," “The Lion and the Mouse," and “How Anansi the Spider Got His Long Legs." </p>

                                </div>
                            </div>
                            <div class="span3">
                                <?php require_once('rightnav.php'); ?>

                            </div>
                        </div><!-- end span -->

                    </div>
                    <!-- end row -->
                </div>
        </div>
        <!-- end mainbody -->
        <?php include('footer.php'); ?>
    </section>
</div>
<!-- end page_wrapper -->
<a href="#" id="totop">TOP</a>
<!--////////////////// Load JS Files -->

<!-- Carousels (by CarouFredSel) -->
<script src="http://www.gru.edu/js/jquery.carouFredSel.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
    ;
    (function($) {

        $(window).load(function() {

            // ** recent works
            $('#recent_works2').carouFredSel({
                responsive: true,
                scroll: 1,
                auto: false,
                items: {
                    width: 270,
                    visible: {
                        min: 1,
                        max: 10
                    }
                },
                prev: {
                    button: ".recentwork_carousel .prev",
                    key: "left"
                },
                next: {
                    button: ".recentwork_carousel .next",
                    key: "right"
                }
            });
            // *** end recent works carousel



        });

    })(jQuery);
</script>
<?php include('footerjs.php'); ?>
<!-- JavaScript at the bottom for fast page loading -->

<div class="hide">
    <div id="transparent_panel" class="transparent_content">
        <p>Alert Panel for Emergency Use</p>
    </div>
</div>
<script src="flowplayer-3.2.12.min.js"></script>
<script src="audiobooks.js"></script>
<!-- end transparent panel --></body>
</html>
