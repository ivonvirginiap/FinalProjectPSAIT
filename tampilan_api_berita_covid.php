<div>
    <h2 class="pull-left">Berita Terkini Terkait Covid-19</h2>
    <br>
    <br>
    <table class="table table-primary table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">URL</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, "https://newsapi.org/v2/everything?q=covid&apiKey=dae0c1f01a7847029be99ca9530d901c");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($curl);
            curl_close($curl);

            $data = json_decode($output, true);
            
            foreach($data['articles'] as $c) {
                echo( "
                <tr>
                    <td>". $c["author"] . "</td>
                    <td>". $c["title"] . "</td>
                    <td>". $c["url"] . "</td>
                </tr>" 
            );
            }        
            ?>
        </tbody>
</div>

<div class="row flex-grow">
    <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
            <div class="card-body">
            <h2 class="card-title card-title-dash">Covid-19 News</h2>
            <div class="row">
            
            <!--berita akan ditampilkan disini menggunakan card bootstrap-->
            <?php
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, "https://newsapi.org/v2/everything?q=music&apiKey=5c03fe32c92645d19b4a4736df09f472");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($curl);
            curl_close($curl);
            $data = json_decode($output, true);
            foreach($data['articles'] as $d){ ?>
            <div class="col-md-4">
                <br>
                <div class="card">
                    <img src="<?php echo $d['urlToImage']; ?>" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $d['title']; ?></h6>
                        <p class="card-text"><?php echo $d['description']; ?></p>
                        <a href="<?php echo $d['url']; ?>" class="btn btn-primary">Lihat Detail</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo $d['publishedAt']; ?></small>
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>