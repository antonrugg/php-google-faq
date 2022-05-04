<?php
include('database.php');

foreach($allfaqs as $faq){
        echo('<h2>' . $faq['question'] . '</h2>');
        foreach($faq['answers'] as $answer){
            echo('<p>' . $answer . '</p>');
        }
        if(isset($faq['subanswer'])) {
            echo('<h3>' . $faq['subanswer'] . '</h3>');
        }
        if(isset($faq['subanswertexts'])) {
            foreach($faq['subanswertexts'] as $subanswertext){
                echo('<p>' . $subanswertext . '</p>');
            }
        }
         
    } 
   
    
    
    
        
        



       





?>