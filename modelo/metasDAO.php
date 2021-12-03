<?php
class metasDAO
{

    function buscaMetas($id_cliente)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=controledemetas", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta = $pdo->query("SELECT id_meta, nome_meta, tipo_meta, valor_meta, desc_meta FROM metas WHERE id_cliente = '$id_cliente'");
        $total_retornado = $consulta->rowCount();


        if ($total_retornado  === 0) {
            echo ("<div class='col' style='width: 15rem; margin: 10px;'>");
            echo ("<div class='card h-100' type='button'>");
            echo ("<div class='card-body'>");
            echo ("<h5 class='card-title'>");
            echo ("</h5>");
            echo ("<p class='card-text'>");
            echo ("Cadastre uma meta.");
            echo ("</p>");
            echo ("</div>");
            echo ("</div>");
            echo ("</div>");
        } else {
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='col' style='width: 15rem; margin: 10px;'>";
                echo "<div class='card h-100'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $linha['nome_meta'] . "</h5>";
                echo "<p class='card-text'>" . "<small class='text-muted'>" . $linha['tipo_meta'] . "</small>" . "</p>";
                if ($linha['valor_meta'] == 0) {
                    $linha['valor_meta'] = "";
                    echo "<p class='card-text'>" . "<small class='text-muted'>" . $linha['valor_meta'] . "</small>" . "</p>";
                } else {
                    echo "<p class='card-text'>" . "<small class='text-muted'>" . "Total para atingir a meta:" . $linha['valor_meta'] . "</small>" . "</p>";
                }

                echo "<p class='card-text'>" . $linha['desc_meta'] . "</p>";
                echo "</div>";
                echo "<div class='card-footer bg-transparent '>" .

                    "<form method='post' action='/controleDeMetas/controle/controle_metas.php'>" .
                    "<input type='hidden' name='id_meta' value = '" . $linha['id_meta'] . "'/>" .
                    "<button type='submit' name='bt_excluir' class='btn buttonExcluirDanger rounded-circle'>" .
                    "<img src='img/trash.svg'>" .
                    "</button>" .
                    "<button type='submit' name='bt_editar' class='btn rounded-circle'>" .
                    "Editar" .
                    "</button>" .
                    "</form>" .

                    '</div>';

                echo "</div>";
                echo "</div>";

                echo "";
            }
        }
    }
    function excluir($id_meta)
    {
        try {
            $pdo  = new PDO("mysql:host=localhost;dbname=controledemetas", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $delete =  $pdo->prepare("DELETE FROM metas WHERE id_meta = '$id_meta'");
            $delete->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        echo "<script>alert('Exclusão realizada com sucesso!');
        window.location = '../visao/metas/metas.php';
        </script>";
    }
    function cadastrarMetas($nome_meta, $tipo_meta, $valor_meta, $desc_meta, $id_cliente)
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=controledemetas', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('INSERT INTO metas (nome_meta, tipo_meta, valor_meta, desc_meta,id_cliente) VALUES(:nome_meta,:tipo_meta,:valor_meta,:desc_meta,:id_cliente)');
            $stmt->execute(array(
                ':nome_meta' => "$nome_meta", ':tipo_meta' => "$tipo_meta", ':valor_meta' => "$valor_meta", ':desc_meta' => "$desc_meta", ':id_cliente' => "$id_cliente"
            ));
            echo "<script>alert('Cadastrado com sucesso!');
            window.location = '../visao/metas/metas.php';
            </script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function Editar($id_meta)
    {
        header("location:../visao/updateDados/editarMeta.php");
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=controledemetas", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta = $pdo->query("SELECT id_meta, nome_meta, tipo_meta, valor_meta, desc_meta, id_cliente FROM metas WHERE id_meta = '$id_meta'");

            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                session_start();
                include_once("../modelo/cliente.php");
                $meta = new metas($linha['id_meta'], $linha['nome_meta'], $linha['tipo_meta'], $linha['valor_meta'], $linha['desc_meta'], $linha['id_cliente']);
                $_SESSION['obj_metas'] = serialize($meta);
                header("location:../visao/updateDados/editarMeta.php");
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function salvarMeta($id_meta, $selectType, $nome_meta, $description, $valor_meta, $id_cliente)
    {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=controledemetas", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $editar = $pdo->query("UPDATE metas SET nome_meta ='$nome_meta', tipo_meta = '$selectType', desc_meta='$description'  WHERE id_meta
       = '$id_meta'");
            $editar->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        echo "<script>alert('alteração realizada com sucesso!');
        window.location = '../visao/metas/metas.php';
        </script>";
    }
}
