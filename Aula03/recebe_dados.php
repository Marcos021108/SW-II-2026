<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rebedito daditos</title>
</head>
<body>
    <?php
        //$nome = $_POST['nome'];
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $ano_atual = date('Y');
        $anoI = $ano_atual - $idade;
    ?>
    <p> O seu nome é: <?php echo $nome; ?></p>
    <p> O seu email é: <?php echo $email; ?></p>
    <p> A sua idade é: <?php echo $idade; ?></p>

    <P> Ahhhhh então voçê nasceu no ano de: <?php  echo $anoI  ?></P>
    <?php
        if ($idade > 0) {
           if ($idade >= 18) {
            Echo "<p style= 'color:blue;'> VOCÊ É MAIOR DE IDADE ";  
            } else {
            Echo "<p style= 'color:orange;'> VOCÊ É MENOR DE IDADE ";
            }
        } else{
            Echo "<p style= 'color:red;'> IDADE INDISPONIVEL ";
        }
         
        //<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-t_3zW4cCxNreRk3P7sArudpUeANYWwye1w&s">
    ?>
</body>
</html>