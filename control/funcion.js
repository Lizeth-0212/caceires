$(document).ready(function(){
    var count2 = 1;
    $('#add').click(function(){
      count2 = count2 + 1;
      var html_code = "<tr id = 'row"+count2+"'>";
      html_code += "<td>"+count2+"</td><td><input type='text' name='equipo[]'></td>";
      html_code += "<th><input type='text' name='cantidad[]'></th>";
      html_code += "<td><button type='button' name='remove' data-row='row"+count2+"'class='btn btn-danger btn-xs remove'>-</button></td>";
      $('#crud_table').append(html_code);
    });
    $(document).on('click','.remove', function(){
      var delete_row = $(this).data("row");
      $('#' + delete_row).remove();

  });
});

    