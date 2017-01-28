<?php 
require('assets/config/config.php');

$form_estabelecimento = $form_endereco = $form_numero = $form_complemento = $form_bairro = $form_cidade = $form_estado = $form_CEP = $form_telefone_1 = $form_telefone_2 = $form_telefone_3 = $form_email = $form_responsavel = $form_website = $form_facebook = $form_instagram = $form_twitter = $form_outra_rede = $form_info = $form_url_site = $form_busca_link = $form_dom_link = $form_dom_title = $form_dom_info = $form_dom_image = $form_estab_logo = "";

if(isset($_POST['form_estabelecimento'])){$form_estabelecimento = $_POST['form_estabelecimento'];};
if(isset($_POST['form_endereco'])){$form_endereco = $_POST['form_endereco'];};
if(isset($_POST['form_numero'])){$form_numero = $_POST['form_numero'];};
if(isset($_POST['form_complemento'])){$form_complemento = $_POST['form_complemento'];};
if(isset($_POST['form_bairro'])){$form_bairro = $_POST['form_bairro'];};
if(isset($_POST['form_cidade'])){$form_cidade = $_POST['form_cidade'];};
if(isset($_POST['form_estado'])){$form_estado = $_POST['form_estado'];};
if(isset($_POST['form_CEP'])){$form_CEP = $_POST['form_CEP'];};
if(isset($_POST['form_telefone_1'])){$form_telefone_1 = $_POST['form_telefone_1'];};
if(isset($_POST['form_telefone_2'])){$form_telefone_2 = $_POST['form_telefone_2'];};
if(isset($_POST['form_telefone_3'])){$form_telefone_3 = $_POST['form_telefone_3'];};
if(isset($_POST['form_email'])){$form_email = $_POST['form_email'];};
if(isset($_POST['form_responsavel'])){$form_responsavel = $_POST['form_responsavel'];};
if(isset($_POST['form_website'])){$form_website = $_POST['form_website'];};
if(isset($_POST['form_facebook'])){$form_facebook = $_POST['form_facebook'];};
if(isset($_POST['form_instagram'])){$form_instagram = $_POST['form_instagram'];};
if(isset($_POST['form_twitter'])){$form_twitter = $_POST['form_twitter'];};
if(isset($_POST['form_outra_rede'])){$form_outra_rede = $_POST['form_outra_rede'];};
if(isset($_POST['form_info'])){$form_info = $_POST['form_info'];};
if(isset($_POST['form_url_site'])){$form_url_site = $_POST['form_url_site'];};
if(isset($_POST['form_busca_link'])){$form_busca_link = $_POST['form_busca_link'];};
if(isset($_POST['form_dom_link'])){$form_dom_link = $_POST['form_dom_link'];};
if(isset($_POST['form_dom_title'])){$form_dom_title = $_POST['form_dom_title'];};
if(isset($_POST['form_dom_info'])){$form_dom_info = $_POST['form_dom_info'];};
if(isset($_POST['form_dom_image'])){$form_dom_image = $_POST['form_dom_image'];};
if(isset($_POST['form_estab_logo'])){$form_estab_logo = $_POST['form_estab_logo'];};

// echo $form_estabelecimento . "<br>";
// echo $form_endereco . "<br>";
// echo $form_numero . "<br>";
// echo $form_complemento . "<br>";
// echo $form_bairro . "<br>";
// echo $form_cidade . "<br>";
// echo $form_estado . "<br>";
// echo $form_CEP . "<br>";
// echo $form_telefone_1 . "<br>";
// echo $form_telefone_2 . "<br>";
// echo $form_telefone_3 . "<br>";
// echo $form_email . "<br>";
// echo $form_responsavel . "<br>";
// echo $form_website . "<br>";
// echo $form_facebook . "<br>";
// echo $form_instagram . "<br>";
// echo $form_twitter . "<br>";
// echo $form_outra_rede . "<br>";
// echo $form_info . "<br>";
// echo $form_url_site . "<br>";
// echo $form_busca_link . "<br>";
// echo $form_dom_link . "<br>";
// echo $form_dom_title . "<br>";
// echo $form_dom_info . "<br>";
// echo $form_dom_image . "<br>";
// echo $form_estab_logo . "<br>";

$sql = "INSERT INTO estabelecimentos (estabelecimento, endereco, numero, complemento, bairro, cidade, estado, CEP, telefone_1, telefone_2, telefone_3, email, responsavel, website, facebook, instagram, twitter, outra_rede, info, url_site, busca_link, dom_link, dom_title, dom_info, dom_image)
VALUES ('$form_estabelecimento',  '$form_endereco',  '$form_numero',  '$form_complemento',  '$form_bairro',  '$form_cidade',  '$form_estado',  '$form_CEP',  '$form_telefone_1',  '$form_telefone_2',  '$form_telefone_3',  '$form_email',  '$form_responsavel',  '$form_website',  '$form_facebook',  '$form_instagram',  '$form_twitter',  '$form_outra_rede',  '$form_info',  '$form_url_site',  '$form_busca_link',  '$form_dom_link',  '$form_dom_title',  '$form_dom_info',  '$form_dom_image')";

if ($conn->query($sql) === TRUE) {
    echo "Estabelecimento Cadastrado com Sucesso!";
} else {
    echo "Erro ao Cadastrar: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>