<?php
	session_start();

	if (!isset($_SESSION['g_access_token'])&&!isset($_SESSION['fb_access_token'])&&!isset($_SESSION['user_token'])){
		header('Location: ../index.php');

	}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<?php //print_r ($_SESSION); ?>
<br/><br/><br/><br/><br/><br/>
<div class="row justify-content-center">
    <h4><strong>Loged In Page</strong></h4>
</div>
	<div class="container" style="margin-top: 100px">
		<div class="row justify-content-center">

            <div class="col-md-3">
                <img style="width: 80%;" src="<?php echo $_SESSION['picture'] ?>">
            </div>

			<div class="col-md-9">
				<table class="table table-hover table-bordered">

					<tbody>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['id']; ?></td>
						</tr>
						<tr>
							<td>First Name</td>
							<td><?php echo $_SESSION['first_name']; ?></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><?php echo $_SESSION['last_name'] ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION['email']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</div>
</body>
</html>