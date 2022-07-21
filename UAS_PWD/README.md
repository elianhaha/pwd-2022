utentang transaksi kereta api
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>User | <?php echo ucfirst($username); ?></title>
</head>

<body>
   <h1><?php echo ucfirst($username); ?></h1>
   <a href="index.php">Back</a>
   <div class="container" align="center">
      <?php
      if ($result) {
         if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) { ?>
               <div class="form-group">
                  <input type="text" value="<?= $row["username"] ?>">
               </div>
               <div class="form-group">
                  <input type="text" value="<?= $row["address"] ?>">
               </div>
               <div class="form-group">
                  <input type="text" value="<?= $row["email"] ?>">
               </div>
               <div class="form-group">
                  <input type="text" value="<?= $row["phone"] ?>">
               </div>
      <?php }
         }
      }
      ?>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

if (isset($_POST["remember"])) {
                    setcookie('id', $row['id'], time() + 60);
                    setcookie('mykey', hash('snefru256', $row['username']), time() + 60);
                }

<div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me" name="remember">
                    <label for="remember-me">Remember me</label>
                </div>
            </div>

//jika username kurang atau kosong
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //username validation
        if (empty($_POST["username"])) {
            $nameErr = "Username is required";
        } elseif (filter_var($_POST["username"], FILTER_VALIDATE_EMAIL)) {
            $nameErr = "Username doesn't contain";
        }
        if (empty($_POST["phone"])) {
            $phoneErr = "Identity is required";
        } //elseif (strlen($_POST["username"]) < 5) {
        if (empty($_POST["address"])) {
            $addErr = "Address is required";
        } //elseif (strlen($_POST["username"]) < 5) {
        //     $nameErr = "Userame should more than 5";
        // } elseif (filter_var($_POST["username"], FILTER_VALIDATE_EMAIL)) {
        //     $nameErr = "Username not corresponding";
        // } else {
        //     header("Location:login.php");
        // }
        //email validation
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Email not corresponding";
        }

        if (empty($_POST["password"])) {
            $passErr = "Password is required";
        }
        if (empty($_POST["password2"])) {
            $passErr2 = "Password Confirmation is required";
        } elseif (!empty($_POST["password2"])) {
            if ($_POST["password2"] !== $_POST["password"]) {
                $passErr2 = "Password Confirmation is not matching";
            }
        }
        <div class="mt-5 text-center">
                           <a class="btn badge bg-success" href="delete-gambar.php?keyword=<?= $row['gambar'] ?>">Edit</a>
                        </div>
<a href="edit-jadwal/edit-tanggal.php?id=<?= $nt["id"] ?>" class="btn btn-success">Selesai</a>
function deleteGambar($keyword)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM users WHERE gambar = '$keyword'");
    return mysqli_affected_rows($conn);
}