<?php include_once("koneksi.php"); ?>
<html>
<head>
    <title>Add Users</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="backdoor.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="text" name="tanggal"></td>
            </tr>
            <tr> 
                <td>Nominal</td>
                <td><input type="text" name="nominal"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $tanggal = $_POST['tanggal'];
        $nominal = $_POST['nominal'];
        
                
        // Insert user data into table
        $result = mysqli_query($conn, "INSERT INTO kegiatan(nama,tanggal,nominal) VALUES('$nama','$tanggal','$nominal')");
        
        // Show message when user added
        echo "Data added successfully. <a href='index.php'>View Data</a>";
    }

    $result = mysqli_query($conn, "SELECT `id`, `nama`, `tanggal`, `nominal` FROM kegiatan ORDER BY id asc");
    $total = 0;
    $a_data = array();
    while($row = mysqli_fetch_array($result)) {
        $a_data[] = $row;
        $total += $row['nominal'];
    }   
    ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nominal</th>
            <th scope="col">Opsi</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($a_data as $nilai){
            echo "<tr>
                <th scope='row'>$nilai[0]</th>
                <td>$nilai[1]</td>
                <td>$nilai[2]</td>
                <td>$nilai[3]</td>
                <td>hapus</td>
            </tr>";
            }
        ?>
        
        </tbody>
    </table>
</body>
</html>