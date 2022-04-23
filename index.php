<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Contact Me</title>
</head>

<body>
    <div class="bgcolor"></div>
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h1>Contact us</h1>
                    <div class="name-email">
                        <div class="textbox">
                            <span>Firstname</span>
                            <input type="text" name="fname">
                        </div>
                        <div class="textbox">
                            <span>Lastname</span>
                            <input type="email" name="lname">
                        </div>
                    </div>
                    <div class="name-email">
                        <div class="textbox">
                            <span>Email</span>
                            <input type="text" name="email">
                        </div>
                        <div class="textbox">
                            <span>Mobile No.</span>
                            <input type="email" name="mobile">
                        </div>
                    </div>
                    <div class="message">
                        <span>Message</span>
                        <textarea name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-md-4 justify-content-center" style="display: flex; flex-direction: column;">
                <p><i class="fa-solid fa-location-dot icons"></i>Green Valley, San Nicolas III, Bacoor, Cavite</p>
                <p><i class="fa-solid fa-envelope icons"></i>jennifer.sabado@cvsu.edu.ph</p>
                <p><i class="fa-solid fa-phone icons"></i>+63 900 000 0000</p>
            </div>
            <div class="col-md-8 right">
                <h1>Contact me</h1>
                <form action="includes/mail.php" method="POST">
                    <div class="name-email">
                        <div class="textbox">
                            <span>Firstname</span>
                            <input type="text" name="fname" required>
                        </div>
                        <div class="textbox">
                            <span>Lastname</span>
                            <input type="text" name="lname" required>
                        </div>
                    </div>
                    <div class="name-email">
                        <div class="textbox">
                            <span>Email</span>
                            <input type="text" name="email" required>
                        </div>
                        <div class="textbox">
                            <span>Mobile No.</span>
                            <input type="text" name="mobile" required>
                        </div>
                    </div>
                    <div class="message">
                        <span>Subject</span>
                        <input type="text" name="subject" id="">
                        <span>Message</span>
                        <textarea name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>