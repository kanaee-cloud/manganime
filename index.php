<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <section class="container1">
        <div class="header">
            <div class="logo">Manganime!</div>
            <button>Join</button>
        </div>

        <div class="content">
            <div class="image">
                <img src="assets/eren.png" alt="">
            </div>
            <div class="icon">
                <a href=""><i class='bx bx-fullscreen'></i></a>
                <a href=""><i class='bx bx-lock'></i></a>
                <a href=""><i class='bx bx-menu'></i></a>
                <a href=""><i class='bx bx-expand-horizontal'></i></a>
            </div>
            <div class="text">
                <?php
                $content = array(
                    array(
                    'title' => 'Eren Yeager', 
                    'alias' => 'エレン・イェーガー', 
                    'isi' => 'He was the main protagonist of Attack on Titan. He lived in Shiganshina District with his parents until the fall of Wall Maria, where he impotently witnessed his mother being eaten by a Titan. This event would lead to Eren intense hatred towards the Titans as he swore to wipe all of them off the face of the Earth. Soon afterward, his father, Grisha Yeager, found him and gave him the key to his basement, instructing Eren to find it at all costs and retake Wall Maria.'
                    )
                );

                foreach ($content as $item) {
                    echo '<h2>' . $item['title'] . '</h2>';
                    echo '<h3>' . $item['alias'] . '</h3>';
                    echo '<p>' . $item['isi'] . '</p>';
                }
                ?>
            </div>
            <div class="biografi">
                <div class="img2">
                    <img src="assets/eren2.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="container2">
        <div class="content2">
            <div class="text2">
                <?php
                $content2 = array(
                    array(
                        'title' => 'After Wall Maria fall',
                        'isi' => 'Soon afterward, his father, Grisha Yeager, found him and gave him the key to his basement, instructing Eren to find it at all costs and retake Wall Maria. He then injected Eren with a Titan serum.',
                        'isi2'=> 'In the year 847, Eren, Mikasa Ackerman, and Armin Arlert joined the 104th Training Corps. The three graduated with Eren ranking 5th best, and they joined the Survey Corps following the battle of Trost District.',
                        
                    )
                );

                foreach ($content2 as $item2){
                    echo '<h2>' . $item2['title'] . '</h2>';
                    echo '<p>' . $item2['isi'] . '</p>';
                    echo '<p>' . $item2['isi2'] . '</p>';
                }


                ?>
            </div>
            <div class="childeren">
                <img src="assets/childeren.jpg" alt="">
            </div>
            <div class="text3">
                <p>
                After finding the basement and unlocking his fathers memories, Eren learned about the truth of what the Titans are, as well as the history of Eldia and Marley. Eren then vowed to free his home from their true enemy: <span>the rest of humanity that lives across the ocean.</span>
                </p>
                <p>
                Eren possessed the power of three Titans. From his father, Eren inherited the Attack and Founding Titans. After eating Lara Tybur during the Raid on Liberio, he gained the War Hammer Titan as well.
                </p>
            </div>
        </div>
    </section>

</body>

</html>