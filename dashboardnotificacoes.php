<?php
session_start();
if (isset($_SESSION['utilizador'])) {

  include('templates/head.html');
  include('templates/sidebar.html');
  include('templates/navbar.php');

  ?>

  <div id="region-main-box" class="col-12">
    <section id="region-maindados" class="has-blocks mb-3 ml-dados">
      <section class="block block_myoverview  card mb-3">
        <h5 class="card-title d-inline">Notificações</h5>
        <div class="card-body">
        <?php
        if (isset($_SESSION['message']) && $_SESSION['message'] == "Eliminado") { ?>
            <div class="alert alert-success" role="alert">
            Notificação eliminada com sucesso!
        </div><?php
           } unset($_SESSION['message']);?>
          <table class="table table-striped table-responsive-md">
            <tr> 
              <th>De:</th>
              <th class="assunto">Assunto</th>
              <th>Data</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <?php
            include('db_connect.php');
            $stmt = $conn->prepare("SELECT n.id, u.nome, n.mensagem, n.assunto, n.data, n.estado 
              FROM t_notificacoes as n JOIN t_utilizador as u ON n.utilizadorRemetente_fk = u.id 
              WHERE n.utilizadorDestino_fk = ? ORDER BY data DESC");
            $stmt->execute(array($_SESSION['userID']));
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($results as $row){
            ?>
            <tr>
              <td><?php echo $row['nome']; ?></td>
              <td class="assunto"><?php echo $row['assunto']; ?></td>
              <td><?php echo $row['data']; ?></td>
              <td><?php if ($row['estado'] == 0) { ?><a href="update.php?id=<?php echo $row['id']; ?>&estado=1"><i class="fas fa-envelope-square"></i></a>
                <?php } else { ?><a href="update.php?id=<?php echo $row['id']; ?>&estado=0"><i class="fas fa-envelope-open-text"></i></a><?php } ?></td>
              <td><a href="?id=<?php echo $row['id']; ?>" data-toggle="modal" data-book-id2="<?php echo $row['assunto']; ?>" data-book-id="<?php echo $row['mensagem']; ?>"  data-target="#detalhes"  ><i class="fas fa-binoculars"></i></td>
              <td><a href="delete.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </section>
    </section>
    <?php include ('templates/modal.php');?>
  </div>
  <?php
  include('templates/scripts.html');
} else {
  header("Location: index.php");
}
?>
<script>
    $('#detalhes').on('show.bs.modal', function(e) {
    var bookId = $(e.relatedTarget).data('book-id');
    var bookId1 = $(e.relatedTarget).data('book-id2');
    $(e.currentTarget).find('textarea[name="bookId"]').val(bookId);
    $(e.currentTarget).find('input[name="bookId2"]').val(bookId1);
});
</script>