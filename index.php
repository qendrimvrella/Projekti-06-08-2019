<?php
    include 'header.php';

    $services = [

        [
            'title' => 'Lorem ipsum dolor 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iste amet vitae obcaecati praesentium omnis nisi quae natus quibusdam magnam ab commodi...', 
            'date' => 'JANUARY 19, 2010'
        ],
        [
            'title' => 'Lorem ipsum dolor 2',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iste amet vitae obcaecati praesentium omnis nisi quae natus quibusdam magnam ab commodi...', 
            'date' => 'JANUARY 21, 2011'
        ],
        [
            'title' => 'Lorem ipsum dolor 3',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iste amet vitae obcaecati praesentium omnis nisi quae natus quibusdam magnam ab commodi...', 
            'date' => 'JANUARY 23, 2012'
        ],
        [
            'title' => 'Lorem ipsum dolor 4',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iste amet vitae obcaecati praesentium omnis nisi quae natus quibusdam magnam ab commodi...', 
            'date' => 'JANUARY 25, 2013'
        ]

    ];
?> 
            
        <div class="showcase">
            <div class="slider">
                <div id="box-img">
                    <img src="./sources/a.jpg">
                </div>
                <button class="prew" onclick="prewImage()"><</button>
                <button class="next" onclick="nextImage()">></button>
            </div>
            <div class="showcase-content">
                <h1>Lorem ipsum dolor sit.</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, expedita nemo dolor eum cum eos rerum quo laudantium officia laboriosam. Lorem, ipsum dolor sit amet</p>
                <div class="btn">
                    <a href="#">Reade More</a><span class="arrow">❯</span>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div id="boxes">
        <div class="container">
            <?php
                foreach ($services as $service) {
                    echo '<div class="box">';
                    echo '<h3>' . $service['title'] .'</h3>';
                    echo '<p>' . $service['description'] . '</p>';
                    echo '<p class="date">' . $service['date'] .'</p>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>

    <div id="quote">
        <div class="container">
            <div class="qoute-box">
                <i class="fas fa-quote-left fa-2x"></i> 
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eius tempora corporis deleniti iusto animi! loaa Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <span class="autori">Qendrim Vrella, CEO, Google</span></p>
            </div>
        </div>
    </div>

    <div id="clients">
        <div class="container">
            <h2>Clients We Have Work With</h2>
            <div class="box-client">
                <img src="./sources/client-1.png" alt="photo">
                <img src="./sources/client-2.png" alt="photo">
                <img src="./sources/client-3.png" alt="photo">
                <img src="./sources/client-4.png" alt="photo">
                <img src="./sources/client-5.png" alt="photo">
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>