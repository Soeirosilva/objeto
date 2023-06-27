<?php

 // var_dump($link);
 //   echo 'aqui funcoes.inc.php <br>';

function monta_select_aluno(){

  global $link;
  
  // lista alunos já cadastrados
  $query = "SELECT id_aluno, ds_aluno FROM tb_aluno;";
  if ($result = mysqli_query($link, $query)) {
	  echo "<select name=\"id_aluno\">";
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
		  $id = $row["id_aluno"];
		  $aluno = $row["ds_aluno"];
                   // <option value="1">Anal. Des. Sist</option> 
		  echo "<option value=\"$id\">";
		  echo  $aluno . '</option>';
          }
          echo "</select>";
          
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }

  }
  
  function monta_select_aluno2($id_aluno){
  global $link;

  // lista alunos já cadastrados
  $query = "SELECT id_aluno, ds_aluno FROM tb_aluno;";
  if ($result = mysqli_query($link, $query)) {
	  echo "<select name=\"id_aluno\">";
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
		  $id = $row["id_aluno"];
		  $aluno = $row["ds_aluno"];
                   // <option value="1">Anal. Des. Sist</option> 
                  echo $id_aluno." == ".$id." <br>";
                  if ($id_aluno == $id) {
                      $selected = 'selected';
                  } else {
                      $selected = '';
                  }
		  echo "<option value=\"$id\" $selected>";
		  echo  $aluno . '</option>';
          }
          echo "</select>";
          
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }

  }
  
  
  function recupera_curso($id){


  global $link;
  // lista cursos já cadastrados
  $query = "SELECT id_curso, ds_curso, id_aluno FROM tb_curso WHERE id_curso = $id;";
  if ($result = mysqli_query($link, $query)) {
	 	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
                return $row;
          }
         
        
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }

  }
// monta_select_curso();  
  
  






