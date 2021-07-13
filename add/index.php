<!DOCTYPE hmtl>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php $judul;?></title>
        <meta name="viewport" content="width=device-widt, initial-scale=1">
        <link rel="stylesheet" href="<?= base_url();?>add/css/main.css">
    </head>
    <body>
        <section class = "banner">
            <h2>BOOKING NOW</h2>
            <div class="card-container">
                <div class="card-img">
                    <!-- image here -->
                </div>

                <div class="card-content">
                    <h3>Reservation</h3>
                    <form>
                        <div class="form-row">
                            <input type ="text" id="" name="" placeholder="Full Name">
                            <input type ="text" id="" name="" placeholder="Email">
                        </div>
                        <div class="form-row">
                            <input type ="text" id="" name="" placeholder="Phone Number">
                            <input type ="text" id="" name="" placeholder="Address">
                        </div>
                        <div class="form-row">
                            <input type ="datetime" id="" name="" placeholder="Date Time">>
                        </div>
                        <div class="form-row">
                            <select name="category">
                            </select>
                            <select name="service">
                            </select>
                        </div>
                        <div class="form-fow">
                            <input type="submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    
    </body>
</html>