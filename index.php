

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      <div class="top-header">  
        <div class="logo">
           <p>GOOGLE</p> 
        </div>
        
      </div>
      <div class="bottom-header">
        <nav>
            <ul>
                <?php
                include('database.php');
                foreach ($navLinks as $navLink) {
                    echo('<li>' . '<a href="#">' . $navLink['text'] . '</a>' . '</li>');
                }
                ?>
            </ul>
        </nav>
      </div>
    </header>
    <main>
        <?php
        include('database.php');

        foreach($allFaqs as $faq){
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
    </main>

    
</body>
</html>