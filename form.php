<?php include 'header.php'; ?>

    <div class="container">
        <form id="myForm" action="/git/myform.php">
            <div class="row">
                <div class="form-group col-12 col-sm-6">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email" class="form-control form-control-lg">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group col-12 col-sm-6">
                    <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                </div>
                <div class="form-group col-12 col-sm-6">
                    <select name="select1" id="select1" class="form-control multiselect w-100" multiple>
                    </select>
                </div>
                <div class="form-group col-12 col-sm-6">
                    <label for="select2">Example multiple select</label>
                    <select name="select2" id="select2" class="form-control" multiple>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group col-12 col-sm-6">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control">
                </div>
                <div class="form-check col-12 col-sm-6">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Check Me Out
                    </label>
                </div>
                <button type="submit" class="btn btn-primary col-12 col-sm-6">Submit</button>
            </div>
        </form>
    </div>
<?php include 'footer.php';