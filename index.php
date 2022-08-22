<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Badwords</h1>
    <h3>
        <?php

           $paragrafo = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium blanditiis rerum iste rem saepe quaerat dolore magnam consectetur officia? Sunt expedita ipsam aliquam illum possimus perferendis, cupiditate unde repellendus dolor?
           Ducimus autem debitis sit magnam mollitia ipsam fugiat sed. Nam dolor nesciunt aliquid voluptas dolorem! Dolores, dolorum iure molestiae nostrum inventore, molestias, magnam adipisci iusto alias enim eum dolorem ullam.
           A, magni dolore hic libero quod minima ullam unde rerum modi, molestias velit autem nisi perspiciatis! Omnis facere dolorum rerum porro nisi dicta. Magnam dignissimos modi minima ullam beatae? Fugit!
           Minus distinctio, itaque doloremque ratione vero cumque quasi quos, voluptate optio fugiat iure unde accusamus soluta quibusdam natus expedita sed ea eligendi! Est quae officia amet non reprehenderit doloremque adipisci!
           Nemo culpa nihil incidunt, quod, necessitatibus assumenda impedit fugiat ratione repellat numquam porro amet in. Quisquam magni tempora dolorum inventore harum ipsam expedita culpa consequatur labore, nisi temporibus rerum ea.'

        ?>
    </h3>
    <h4>
        <?php
          echo $paragrafo;
          var_dump ($paragrafo);
        ?>
    </h4>
    <h4>
        <?php
          echo $_GET['word'];
          var_dump($_GET);
        ?>
    </h4>
    <h4>
        <?php
          $paragrafoNuovo = str_replace($_GET['word'], '***', $paragrafo);
          echo $paragrafoNuovo;
          var_dump($paragrafoNuovo);
        ?>
    </h4>
</body>
</html>