<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $database_server='localhost';
    $database_username='root';
    $database_password='';
    $database_name='Products';

    $conn = mysqli_connect($database_server, $database_username, $database_password, $database_name);

    if(!$conn){
        die("failed to connect to MySQL:".mysqli_connect_error());
    }

     $sql ="CREATE DATABASE Products";
     $status=$conn->query($sql);

     if($status){
         echo"Database craeted Successfully";
     }else{
     echo "Error creating database:".$conn->error;
    }$conn->close();

        $sql_query="CREATE TABLE Phones(
            id INT(11)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            company VARCHAR(30) NOT NULL,
            cpu VARCHAR(50) NOT NULL,
            camera VARCHAR(30) NOT NULL,
            screen VARCHAR(50) NOT NULL,
            aux VARCHAR(30) NOT NULL,
            ram VARCHAR(50) NOT NULL,
            battery VARCHAR(50) NOT NULL)";

        $sql_query="CREATE TABLE Cars(
            id INT(11)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            company VARCHAR(30) NOT NULL,
            model VARCHAR(50) NOT NULL,
            country VARCHAR(30) NOT NULL,
            engine VARCHAR(50) NOT NULL,
            color VARCHAR(30) NOT NULL,
            mass VARCHAR(50) NOT NULL,
            interiorcolor VARCHAR(50) NOT NULL)";

        $sql_query="CREATE TABLE computers(
            id INT(11)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            cpu VARCHAR(30) NOT NULL,
            gpu VARCHAR(50) NOT NULL,
            ram VARCHAR(30) NOT NULL,
            motherboard VARCHAR(50) NOT NULL,
            cooler VARCHAR(30) NOT NULL,
            keyboard VARCHAR(50) NOT NULL,
            mouse VARCHAR(50) NOT NULL)";

        $status = $conn->query($sql_query);

        if($status){
            echo"table created";
        }else{
            echo"error".$conn->error;
        }$conn->close();

        $sql = "INSERT INTO Phones (name, company, cpu, camera, screen, aux, ram, battery) VALUES 
        ('iPhone 13', 'Apple', 'A15 Bionic', '12 MP', '6.1 inches', 'No', '4 GB', '3046 mAh'),
        ('Galaxy S21', 'Samsung', 'Exynos 2100', '12 MP', '6.2 inches', 'Yes', '8 GB', '4000 mAh'),
        ('Pixel 6', 'Google', 'Google Tensor', '50 MP', '6.4 inches', 'Yes', '8 GB', '4614 mAh'),
        ('Mi 12', 'Xiaomi', 'Snapdragon 8 Gen 1', '108 MP', '6.7 inches', 'No', '12 GB', '5000 mAh'),
        ('OnePlus 10', 'OnePlus', 'Snapdragon 8 Gen 1', '50 MP', '6.7 inches', 'Yes', '12 GB', '4500 mAh'),
        ('Zenfone 8', 'Asus', 'Snapdragon 888', '64 MP', '5.9 inches', 'No', '16 GB', '4000 mAh'),
        ('Mi 11T Pro', 'Xiaomi', 'Snapdragon 870', '108 MP', '6.67 inches', 'No', '8 GB', '5000 mAh'),
        ('Pixel 5a', 'Google', 'Snapdragon 765G', '12.2 MP', '6.34 inches', 'Yes', '6 GB', '4680 mAh'),
        ('iPhone SE (2022)', 'Apple', 'A15 Bionic', '12 MP', '4.7 inches', 'No', '3 GB', '1821 mAh'),
        ('Galaxy A52s 5G', 'Samsung', 'Snapdragon 778G', '64 MP', '6.5 inches', 'Yes', '6 GB', '4500 mAh')";
        
        if (mysqli_query($conn, $sql)) {
            echo "10 items added to the table successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        
        mysqli_close($conn);

        $sql = "INSERT INTO Cars (name, company, model, country, engine, color, mass, interiorcolor) VALUES 
            ('Corolla', 'Toyota', 'XSE', 'Japan', '2.0L 4-Cylinder', 'Silver', '3085 lb', 'Black'),
            ('Civic', 'Honda', 'EX', 'Japan', '2.0L 4-Cylinder', 'Blue', '2906 lb', 'Beige'),
            ('Sonata', 'Hyundai', 'Limited', 'South Korea', '2.5L 4-Cylinder', 'White', '3474 lb', 'Black'),
            ('Camry', 'Toyota', 'LE', 'Japan', '2.5L 4-Cylinder', 'Gray', '3318 lb', 'Gray'),
            ('Accord', 'Honda', 'Sport', 'Japan', '1.5L 4-Cylinder', 'Red', '3131 lb', 'Black'),
            ('Altima', 'Nissan', 'SR', 'Japan', '2.5L 4-Cylinder', 'Black', '3164 lb', 'Black'),
            ('Fusion', 'Ford', 'SE', 'United States', '1.5L 4-Cylinder', 'Silver', '3443 lb', 'Gray'),
            ('Malibu', 'Chevrolet', 'LS', 'United States', '1.5L 4-Cylinder', 'Black', '3158 lb', 'Beige'),
            ('Optima', 'Kia', 'EX', 'South Korea', '2.4L 4-Cylinder', 'Gray', '3247 lb', 'Black'),
            ('Passat', 'Volkswagen', 'SE', 'Germany', '2.0L 4-Cylinder', 'Blue', '3295 lb', 'Black')";

            if (mysqli_query($conn, $sql)) {
                echo "10 items added to the table successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            
            mysqli_close($conn);
    
        $sql = "INSERT INTO computers (name, cpu, gpu, ram, motherboard, cooler, keyboard, mouse) 
              VALUES 
              ('Dell G5 15', 'Intel Core i7-10750H', 'NVIDIA GeForce GTX 1660 Ti', '16GB DDR4', 'Dell 0KTDYC', 'Air Cooler', 'Dell KB216', 'Dell MS116'),
              ('ASUS ROG Strix', 'AMD Ryzen 9 5900X', 'NVIDIA GeForce RTX 3080', '32GB DDR4', 'ASUS ROG Crosshair VIII Dark Hero', 'Liquid Cooler', 'ASUS ROG Strix Scope RX', 'ASUS ROG Chakram'),
              ('HP Pavilion', 'AMD Ryzen 5 5600G', 'AMD Radeon Graphics', '8GB DDR4', 'HP 2B4B', 'Air Cooler', 'HP K1500', 'HP X1000'),
              ('Lenovo Legion', 'Intel Core i5-11400H', 'NVIDIA GeForce GTX 1650', '8GB DDR4', 'Lenovo LNVNB161216', 'Air Cooler', 'Lenovo 510K', 'Lenovo 300'),
              ('Acer Nitro 5', 'AMD Ryzen 7 5800H', 'NVIDIA GeForce RTX 3060', '16GB DDR4', 'Acer Nitro AN515-45', 'Air Cooler', 'Acer Nitro Gaming Keyboard', 'Acer Nitro Gaming Mouse'),
              ('Apple MacBook Air', 'Apple M1', 'Apple M1', '8GB LPDDR4X', 'Apple M1', 'Fanless', 'Apple Magic Keyboard', 'Apple Magic Mouse'),
              ('MSI Stealth 15M', 'Intel Core i7-1185G7', 'NVIDIA GeForce RTX 3060 Max-Q', '16GB DDR4', 'MSI MS-16Q3', 'Air Cooler', 'MSI Vigor GK30', 'MSI GM11'),
              ('Dell XPS 13', 'Intel Core i7-1185G7', 'Intel Iris Xe Graphics', '16GB LPDDR4x', 'Dell 0WW4DY', 'Air Cooler', 'Dell KB216', 'Dell MS116'),
              ('ASUS ZenBook Pro', 'Intel Core i9-11900H', 'NVIDIA GeForce RTX 3050 Ti', '32GB DDR4', 'ASUS ZenBook Pro 15 OLED', 'Air Cooler', 'ASUS NumberPad 2.0', 'ASUS ZenBook Pro Duo UX581GV'),
              ('HP EliteBook', 'Intel Core i7-1165G7', 'Intel Iris Xe Graphics', '16GB DDR4', 'HP 8GK12UT', 'Air Cooler', 'HP Premium Wireless Keyboard and Mouse Combo', 'HP Wireless Rechargeable USH')";
            if (mysqli_query($conn, $sql)) {
                echo "10 items added to the table successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            
            mysqli_close($conn);
    ?>
</body>
</html>