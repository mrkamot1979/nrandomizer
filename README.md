NRandomizer Japanese
=======

Overview
-----------
This a simple PHP application that shows randomized Japanese kanji characters, its yomikata (i.e. "how it is read") and its english definition.  I use this as a "flashcard" in my Kanji studies.
 
Technologies used:
   * PHP
   * MySQL - in future versions
   * Apache

Installation
-----------
   * XAMPP - I used the [XAMPP](https://www.apachefriends.org/index.html) bundle to make things easy to install.  
   * MySQL database -  

Just copy the two files and paste them both in the same directory, have PHP / Apache running and point the browser to your localhost and viola, instant randomized flashcard.  

If you want to add more Japanese characters, just open the jpwords.php file and tinker with the $jpwords array
   
   
Workflows
-------------
Everytime the page refreshes (hitting F5 by the user), a new Japanese character will show (ideally); if you find that the same character is displayed, just refresh again to pull up a random character.  To find out the yomikata and the English translation, just highlight the space below the kanji to reveal the answers.
