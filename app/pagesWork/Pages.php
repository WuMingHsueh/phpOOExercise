<?php

namespace OOExercise\pagesWork;

class Pages
{
    public $content;
    public $title = "TLA Consulting Pty Ltd";
    public $keywords = "TLA Consulting, Three Letter Abbreviation,
                       some of my best friends are search engines";
    public $buttons = [
                        "Home"     => "home.php",
                        "Contact"  => "contact.php",
                        "Services" => "services.php",
                        "Site Map" => "map.php"
                    ];

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    
    public function Display()
    {
        echo "<!DOCTYPE html>\n<html>\n<head>\n<meta charset='UTF-8'>";
        $this->DisplayTitle();
        $this->DisplayKeywords();
        $this->DisplayStyles();
        echo "</head>\n<body>";
        $this->DisplayHeader();
        $this->DisplayMenu($this->buttons);
        echo $this->content;
        $this->DisplayFooter();
        echo "</body>\n</html>";
    }

    public function DisplayTitle()
    {
        echo "<title>". $this->title ."</title>";
    }

    public function DisplayKeywords()
    {
        echo "<meta name='keywords' content='".$this->keywords."'/>";
    }

    public function DisplayStyles()
    {
        ?>
        <link rel="stylesheet" href="styles.css" type="text/css">
        <?php
    }

    public function DisplayHeader()
    {
        ?>
        <header>
            <img src="logo.gif" alt="TLA Logo" height="70" width="70" />
            <h1>TLA Consulting</h1>
        </header>
        <?php
    }

    public function DisplayMenu($buttons)
    {
        ?>
        <nav>
        <?php foreach ($buttons as $name => $url):?>
            <?php $this->DisplayButton($name, $url, !$this->IsURLCurrentPage($url)); ?>
        <?php endforeach; ?>
        </nav>
        <?php
    }

    public function IsURLCurrentPage($url)
    {
        return (strpos($_SERVER['PHP_SELF'], $url)===false)? false: true;
    }

    public function DisplayButton($name, $url, $active=true)
    {
        ?>
        <?php if ($active): ?>
            <div class="menuitem">
                <a href="<?=$url?>">
                    <img src="s-logo.gif" alt="" height="20" width="20">
                    <span class="menutext"><?=$name; ?></span>
                </a>
            </div>
        <?php else :?>
            <div class="menuitem">
                <img src="side-logo.gif">
                <span class="menutext"><?=$name; ?></span>
            </div>
        <?php endif; ?>
        <?php
    }

    public function DisplayFooter(Type $var = null)
    {
        ?>
        <footer>
            <p>
                &copy; TLA Consulting Pty Ltd. <br>
                Please see our
                <a href="legal.php">legal information page</a>.
            </p>
        </footer>
        <?php
    }
}
