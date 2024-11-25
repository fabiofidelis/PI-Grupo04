$(document).ready(function () {
  $('#form-pacientes').submit(function (event) {
    event.preventDefault();
    var nome = $('#nome').val();
    var idade = $('#idade').val();

    $.post('php/insert.php', { nome: nome, idade: idade }, function (data) {
      loadPatients();
      $('#nome').val('');
      $('#idade').val('');
    });
  });

  function loadPatients() {
    $.get('php/view.php', function (data) {
      $('#list-pacientes').html(data);
    });
  }

  loadPatients();

  $(document).on('click', '.delete-btn', function () {
    var id = $(this).data('id');
    $.post('php/delete.php', { id: id }, function (data) {
      loadPatients();
    });
  });

  $(document).on('click', '.edit-btn', function () {
    var id = $(this).data('id');
    var nome = prompt("Digite o novo nome:");
    var idade = prompt("Digite a nova idade:");
    if (name !== null && idade !== null) {
      $.post('php/update.php', { id: id, nome: nome, idade: idade }, function (data) {
        loadPatients();
      });
    }
  });
});
