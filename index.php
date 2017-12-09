<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap\bootstrap.css">
</head>
<body>
<div class="container">
    <h1>Title<span class="fab fa-font-awesome"></span></h1>
    <p>This is a paragraph</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h2>Carousel</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">1</div>
                    <div class="carousel-item">2</div>
                    <div class="carousel-item">3</div>
                    <div class="carousel-item">4</div>
                    <div class="carousel-item">5</div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <form>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email" class="form-control form-control-lg">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                </div>
                <div class="form-group">
                    <label for="select1">Example Select</label>
                    <select name="select1" id="select1" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="select2">Example multiple select</label>
                    <select name="select2" id="select2" class="form-control" multiple>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Check Me Out
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!--<script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>-->


<script src="js/fontawesome-all.js"></script>
<script>
    $('.carousel').find('.carousel-item:first').addClass('active');
</script>
</body>
</html>