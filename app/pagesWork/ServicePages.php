<?php

namespace OOExercise\pagesWork;

class ServicePages extends Pages
{
    private $row2Buttons = [
                            "Re-engineering"       => "reengineering.php",
                            "Standards Compliance" => "standards.php",
                            "Buzzword Compliance"  => "buzzword.php",
                            "Mission Statements"   => "mission.php"
                            ];
    public function Display()
    {
        echo "<!DOCTYPE html>\n<html>\n<head>\n<meta charset='UTF-8'>";
        $this->DisplayTitle();
        $this->DisplayKeywords();
        $this->DisplayStyles();
        echo "</head>\n<body>";
        $this->DisplayHeader();
        $this->DisplayMenu($this->buttons);
        $this->DisplayMenu($this->row2Buttons);
        echo $this->content;
        $this->DisplayFooter();
        echo "</body>\n</html>";
    }
}
