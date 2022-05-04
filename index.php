

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      <div class="top-header">  
        <div class="logo">
           <p>GOOGLE</p> 
        </div>
        <div class="grid-pic">
            <a href="#"><i class="fa-solid fa-grip"></i></a>
            <img src="https://picsum.photos/200/300" alt="pro pic">
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