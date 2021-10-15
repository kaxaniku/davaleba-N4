<!DOCTYPE html>
<html>
<head>
    <title>davaleba</title>
    <link rel="stylesheet" href="assets/style/css.css">
</head>
<?php
$form = [
    [
        "id" => 1,
        "name" => 'სახელი',
        "label" => 'Name'
    ],
    [
        "id" => 2,
        "name" => 'ელფოსტა',
        "label" => 'Email'
    ],
    [
        "id" => 3,
        "name" => 'ტელეფონის ნომერი',
        "label" => 'Phone'
    ]
];
?>
<body>
    <div class="box">
        <h1>დაგვიკავშირდით</h1>
        <form action="send.php" method="get">
            <section>
    <div class="Frow">

    <?php foreach ($form as $key => $value):?>
        <label for="<?php echo $value['label']?>"><?php echo $value['name']?></label>
        <input type='text' name=<?php echo $value['label']?>>
    <?php endforeach; ?>

    </div>
    <div class="Srow">
        <label for="Lastname">გვარი</label>
        <input type="text" id="Lastname" name="Lastname">

        <label for="messege">მესიჯი</label>
        <textarea name="messege"></textarea>
    </div>
    </section>
    <?php if(isset($_GET['checker']) && $_GET['checker'] == 'false') {
        echo '<span class="err">გაგზავნის დროს დაფიქსირდა შეცდომა გთხოვთ სცადოთ თავიდან</span>';
    }?>
    <button>Send</button>
        </form>
    </div>
</body>
</html>