$(document).ready(function(){
    $('#js-btn').click(function(){
        $.get('http://192.168.60.141/aptech-php-demo/laravel/crud/public/api/v1/users', function(data, status){
            console.log(status);
            if(status == 'success'){
                var table = '<table id="js-table" class="table text-center"></table>';
                $('#js-div-table').append(table);
                var thead = '<thead id="js-thead"></thead>';
                $('#js-table').append(thead);
                var tr = '<tr id="js-tr"></tr>';
                $('#js-thead').append(tr);
                var th = '<th>STT</th><th>ID</th><th>NAME</th><th>Email</th>';
                $('#js-tr').append(th);
                var tbody = '<tbody id="js-tbody"></tbody>';
                $('#js-thead').after(tbody);
                var users = data.users;
                users.forEach(function(user,sodem){
                    var trbody = '<tr id="js-trbody-' + sodem + '"></tr>';
                    $('#js-tbody').append(trbody);
                    var stt = sodem + 1;
                    var tdbody = '<td>'+ stt + '</td><td>'+ user.id +'</td><td>'+ user.name +'</td><td>'+ user.email +'</td>';
                    $('#js-trbody-'+ sodem).append(tdbody);
                });
            }
        });
    });
});