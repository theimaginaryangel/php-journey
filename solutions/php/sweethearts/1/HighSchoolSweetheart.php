<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $clean =trim($name);
        return $clean[0];
    }

    public function initial(string $name): string
    {
        $letter=strtoupper($this->firstLetter($name));
        return  $letter.".";
    }

    public function initials(string $fullname): string
    {
        $parts=explode(" ",trim($fullname));
        return $this->initial($parts[0]). " ".$this->initial($parts[1]);
        
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
       $initials1 =$this->initials($sweetheart_a);
        $initials2 =$this->initials($sweetheart_b);

        return <<<HEART
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     $initials1  +  $initials2     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
HEART;
}

    }

