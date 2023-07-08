<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <script src="./validate.js"></script>

    <title>Alumni Form</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: right;
            min-height: 100vh;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            /* border: 1px solid #ddd; */
            /* border-radius: 5px; */
            /* background-color: #f9f9f9; */
            /* margin-right: revert; */
        }

        .container h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container button[type="submit"] {
            width: 100%;
        }

        #card {
            display: none;
            margin-top: 20px;
        }

        #card .card-body {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Alumni Registration</h3>
        <form method="POST" onsubmit="return validateFORM()" id="registrationForm">
            <div class="form-group">
                <label for="name"> <b>Name:</b></label>
                <input type="text" class="form-control" id="fullname" name="name" placeholder="Enter your name" onkeydown="return alphaOnly(event);">
                <small id="nameError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="passing-year"> <b>Passing Year:</b></label>
                <select class="form-control" name="passing_year" id="passing-year">
                    <option value="not selected">select</option>
                    <option value="2008">2008</option>
                   
                </select>
                <small id="passError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="email"><b>Email:</b></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                <small id="emailError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="phone"></i> <b>Phone:</b></label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                <small id="phoneError" class="text-danger"></small>
            </div>

            <div class="form-group">
                <label for="present_status"> <b>Present Status:</b></label>
                <input type="text" class="form-control" id="present_status" name="present_status" placeholder="Enter your present status">
                <small id="presentstatusError" class="text-danger"></small>
            </div>

            <div class="form-group">
                <label for="working-place"> <b>Working Place:</b></label>
                <input type="text" class="form-control" id="working-place" name="working_place" placeholder="Enter your working place">
                <small id="workingPlaceError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="memorableEvent"> <b>Memorable Event:</b></label>
                <textarea type="text" class="form-control" rows="1" id="memorableEvent" name="memorableEvent" placeholder="Enter your memorable event"></textarea>
                <small id="MemorableEventError" class="text-danger"></small>
            </div>
            <div>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary"></input>
        </form>

        <div id="card">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" id="cardName"></h5>
                    <p class="card-text" id="cardMemorableEvent"></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault();


            var name = document.getElementById('fullname').value;
            var memorableEvent = document.getElementById('memorableEvent').value;
            document.getElementById('cardName').textContent = 'Name: ' + name;
            document.getElementById('cardMemorableEvent').textContent = 'Memorable Event: ' + memorableEvent;
            document.getElementById('card').style.display = 'block';
        });
    </script>
</body>

</html>