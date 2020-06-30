
<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1><?=siteName;?></h1>
<ul>
    <?php
    if(isset($_POST['add'])) {
        echo "<li>" . $_POST['Skrydžio nr'] . "</li>";
        echo "<li>" . $_POST['asmens kodas'] . "</li>";
        echo "<li>" . $_POST['vardas pavardė'] . "</li>";
        echo "<li>" . $_POST['is kur srenda'] . "</li>";
        echo "<li>" . $_POST['i kur skrenfa'] . "</li>";
        echo "<li>" . $_POST['kaina bagazas'] . "</li>";
        echo "<li>" . $_POST['pastabos'] . "</li>";
    }
    ?>
</ul>
<form method="POST">
    <input type=""text" placeholder="paslaugu tiekejas" name="provider">
    <input type="email" placeholder="El. pastas" name="email">
    <select name="paslauga">
        <?php foreach($services as $service):?>
            <option value="<?=$service;?>"><?=$service;?></option>
        <?php endforeach;?>
    </select>
    <button type="submit" name="add">Prideti</button>
</form>
</body>
</html>